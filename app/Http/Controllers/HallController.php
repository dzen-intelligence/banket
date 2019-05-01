<?php

namespace App\Http\Controllers;

use App\Models\Halls;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\HallFilter;

class HallController extends Controller
{

    private $halls;

    public function __construct(Halls $halls)
    {
        $this->halls = $halls;
    }

    public function lists(Request $request)
    {
//        $halls = Halls::query()->with('types', 'additions')->paginate(4);

        $halls = Halls::with(['types', 'additions']);
        $halls = (new HallFilter($halls, $request))->apply()->paginate(10);
        $request->query('');

        return view('halls.lists', compact('halls'));
    }

    public function detail($hallid)
    {
//        $hall = Halls::query()->findOrFail($hallid);
        $hall = Halls::with(['additions', 'contacts', 'timeworks'])->findOrFail($hallid);

        return view('halls.detail', compact('hall'));
    }

    public function mapHalls(Request $request)
    {
        if ($request->ajax()) {

            $dataForMap = [];
            $all_halls = Halls::with(['contacts', 'types'])->select('*')->get();

            foreach ($all_halls as $list_hall) {
//            var_dump($list_hall->types->name);

                $dataForMap[] = [
                    'type' => 'Feature',
                    'geometry' => [
                        'type' => 'Point',
                        'coordinates' => [
                            $list_hall->latitude,
                            $list_hall->longitude
                        ]
                    ],
                    'properties' => [
                        'id' => $list_hall->id,
                        'index' => 1,
                        'isActive' => true,
                        'logo' => 'http://placehold.it/32x32',
                        'image' => $list_hall->preview_image,
                        'link' => url('/hall/' . $list_hall->id),
                        'name' => $list_hall->title,
                        'category' => $list_hall->types->name,
                        'stars' => 4,
                        'email' => $list_hall->contacts['email'],
                        'phone' => $list_hall->contacts['phone'],
                        'about' => Str::limit($list_hall->description, 120),
                        'tags' => ['tag']
                    ]
                ];
            }

//        $data = [
//            'type' => 'FeatureCollection',
//            'features' => $dataForMap
//        ];

//        var_dump( json_encode($dataForMap)  );
            json_encode($dataForMap);

            return response()->json([
                'type' => 'FeatureCollection',
                'features' => $dataForMap
            ], 200);
        }
    }
}
