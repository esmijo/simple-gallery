<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;


class GalleryController extends Controller
{
    public function insert(Request $r) {  

        if($r->hasFile('image')) {
            $filename = $r->image->getClientOriginalName();
        }

    	$g = new Gallery;
    	$g->title = $r->title;
    	$g->description = $r->title;
    	$g->imagePath = '/images/'. $filename;
        $r->image->move(public_path('images'), $filename);
    	$g->save();
    	return redirect('/manage');
    }

    public function live_search(Request $r) {
        $output = '';
        $query = $r->live_search;

        if($query == '') {
            $data = Gallery::all();
        }
        else {
            $data = Gallery::where('title', 'like', '%'.$query.'%')
            ->orWhere('description', 'like', '%'.$query.'%')->get();
        }

        $total_row = count($data);

        if($total_row > 0) {
            foreach($data as $item) {
                $output .= '
                <tr>
                    <td>'.$item->id.'</td>
                    <td>'.$item->title.'</td>
                    <td>'.$item->description.'</td>
                    <td class="text-center"> <img src="'.$item->imagePath.'" height="150px"></td>
                    <td class="text-center">'.$item->created_at.'</td>
                    <td class="text-center">
						<a class="actions btn btn-warning" href="/update/' . $item->id . '">Edit</a>
						<a class="actions btn btn-danger" href="/update/' . $item->id . '">Delete</a>
					</td>
                </tr>';
            }
        }
        else {
            $output = '
                <tr>
                <td align="center" colspan="5">No Data Found</td>
                </tr>
            ';
        }

        $data = array(
            'table_data'  => $output
        );

        return response()->json($data);
    }

    public function delete($id) {
        $item = Gallery::find($id);
        $item->delete();
        return redirect('/manage');
    }

    public function update(Request $r) {
        $item = Gallery::find($r->hidden_id);
        $item->title = $r->title;
        $item->description = $r->description;
        if($r->hasFile('image')) {
            $filename = $r->image->getClientOriginalName();
            $item->imagePath = '/images/'. $filename;
            $r->image->move(public_path('images'), $filename);
        }

        $item->save();
        return redirect('/manage');
    }
}