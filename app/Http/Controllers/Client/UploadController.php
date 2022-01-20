<?php
namespace App\Http\Controllers\Client;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use \RecursiveIteratorIterator;
use \RecursiveArrayIterator;

class UploadController extends Controller{
    function display(Request $request){

        $name = 'file.json';
        $path = $request->file('jsonfile')->storeAs('',$name,'public');
        $list = ["Summary","Education","Skills","Gender","Identity","Experience"];
        $lists = file_get_contents(storage_path().'/app/public/file.json');
        $jsonIterator = new RecursiveIteratorIterator
        (new RecursiveArrayIterator(json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '',$lists),true)),
        RecursiveIteratorIterator::SELF_FIRST); 
        echo '<table style ="width: 90%; margin-left:5%; margin-top:50px; margin-bottom:100px" class ="table table-striped table-bordered table-hover">';
        echo '<th>'."Information".'</th>';
        echo '<th>'."Parsed".'</th>';
        foreach ($jsonIterator as $key => $val) {
            if(is_array($val)) {  
                } else {
                    if(strpos($key,"_")!== false){
                        $key = str_replace("_"," ",$key);
                    }
                    echo '<tr>';
                        echo '<th>'.ucfirst($key).'</th>';
                        echo '<td>'.$val.'</td>';
                    echo '</tr>';    
                }
            }
        echo '</table>';   
    return view('upload/display',compact('jsonIterator'));
    }
}
    

?>
