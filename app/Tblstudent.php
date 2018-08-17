<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tblstudent extends Model
{
    public $table="tblstudents";

//    //one article has many comments
//    //the same name of table or any name
//    function commentsabc(){
//
//        return $this->hasMany('App\Comment');//the name of class Model
//    }
////     //go to model Comment and do the reverse relation that every comment has one article
//



    //every Student belongs to one Building
    //the same name of table or any name
    function tblbuilds(){

        return $this->belongsTo('App\Tblbuild','buildid');//the name of class Model
    }

    function tblcolleges(){

        return $this->belongsTo('App\Tblcollege','collegeid');//the name of class Model
    }

    function tblnationalitys(){

        return $this->belongsTo('App\Tblnationality','nationalityid');//the name of class Model
    }

    function tblroomtypes(){

        return $this->belongsTo('App\Tblroomtype','roomtypeid');//the name of class Model
    }

    function tblsems(){

        return $this->belongsTo('App\Tblsem','semid');//the name of class Model
    }

    public static function ApplyFliter(\Illuminate\Http\Request  $request)
    {
        $query = Tblstudent::query();


//        $query = $query->with('tblbuilds')->where('buildid', $request->buildidlist)->whereHas('tblbuilds', function($q){
//               $q->where('build', 'A');
//           })->get();


        $query = $query->with(['tblbuilds:id,build,buildchar', 'tblroomtypes:id,roomtype']);

        $query = $query->with('tblcolleges:id,collegename');
        $query = $query->with('tblnationalitys:id,nationalityname');
        $query = $query->with('tblsems');

        if ($request->filled('stdid')) { //or use has instead of filled


            $query->where('stdid', $request->stdid);

        }
        if ($request->filled('fname')) {


            $query->where('fname', 'like', '%' . $request->fname . '%');

        }

        if ($request->filled('buildidlist')) {

            $query->where('buildid', $request->buildidlist);


        }

        if ($request->filled('roomtypelist')) {


            $query->where('roomtypeid', $request->roomtypelist);


        }

        if ($request->filled('collegelist')) {


            $query->where('collegeid', $request->collegelist);

        }
        if ($request->filled('roomno')) {


            $query->where('roomno', $request->roomno);

        }


        if ($request->filled('mobile')) {


            $query->where('mobile', 'like', '%' . $request->mobile . '%');

        }


        if ($request->filled('nationalityidlist')) {


            $query->where('nationalityid', $request->nationalityidlist);

        }

        if ($request->filled('semlist')) {


            $query->where('semid', $request->semlist);

        }

        if ($request->filled('extension')) {


            $query->where('extension', $request->extension);

        }

         $query->where('buildid', '>', 0)->orderBy('buildid', 'asc')->orderBy('roomno', 'asc');
       //  dd( $query);
        return  $query ;

    }
    public static function ApplyFliterJoin(\Illuminate\Http\Request  $request)
    {
        $query = Tblstudent::query();

        if ($request->filled('stdid')) { //or use has instead of filled


            $query->where('stdid', $request->stdid);

        }
        if ($request->filled('fname')) {


            $query->where('fname', 'like', '%' . $request->fname . '%');

        }

        if ($request->filled('buildidlist')) {


            $query->where('buildid', $request->buildidlist);

        }

        if ($request->filled('roomtypelist')) {


            $query->where('roomtypeid', $request->roomtypelist);

        }

        if ($request->filled('collegelist')) {


            $query->where('collegeid', $request->collegelist);

        }
        if ($request->filled('roomno')) {


            $query->where('roomno', $request->roomno);

        }


        if ($request->filled('mobile')) {


            $query->where('mobile', 'like', '%' . $request->mobile . '%');

        }


        if ($request->filled('nationalityidlist')) {


            $query->where('nationalityid', $request->nationalityidlist);

        }

        if ($request->filled('semlist')) {


            $query->where('semid', $request->semlist);

        }

        if ($request->filled('extension')) {


            $query->where('extension', $request->extension);

        }

        $query->where('buildid', '>', 0)->orderBy('buildid', 'asc')->orderBy('roomno', 'asc');

        return  $query;

    }
}
