@extends('layouts.app')

@section('content')
    <div class="container">

            {{--<div class="col-md-8">--}}

                    {{--<h1>Student Page</h1>--}}

            {{--@foreach($studentsarr as $student)--}}

            {{--{{$student->fname}}--}}
                    {{--{{$student->tblbuilds->build}}--}}
                    {{--{{$student->tblcolleges->collegename}}--}}
                    {{--{{$student->tblnationalitys->nationalityname}}--}}

                    {{--@foreach($student->tblbuilds as $std)--}}
                    {{----}}
                    {{--@endforeach--}}
                    {{--<br>--}}
                {{--@endforeach--}}




                    <form action="student" method="get">
                        {{csrf_field()}}
                        <input   type=hidden ID="getrequest" name="getrequest" value="1"   />

                        <fieldset class="well the-fieldset">
                            <legend class="the-legend">
                                بحث ص
                            </legend>

                            <div class="row">

                                <div class="col-md-3 col-sm-6">

                                    <div class="form-group">
                                        <label class="col-md-4 control-label"> الرقم  </label>
                                        <div class="col-md-8">
                                            <input type="text" ID="stdid" name="stdid" value="{{ old('stdid') }}" class="form-control" placeholder="ادخل الرقم الجامعي" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">اسم الطالب  </label>
                                        <div class="col-md-8">
                                            <input type="text" ID="fname" name="fname"  value="{{ old('fname')}}" class="form-control" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">المبنى</label>
                                        <div class="col-md-8">
                                            <select id="buildidlist" name="buildidlist"   class="form-control">
                                                <option  value=''>المبنى</option>
                                             @foreach($tblbuilds as $building)
                                                <option <?php if(old('buildidlist')==$building->id) echo 'selected' ?> value={{$building->id}}>{{$building->build}}</option>

                                             @endforeach
                                            </select>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"> الجنسية </label>
                                        <div class="col-md-8">
                                            <select ID="nationalityidlist" name="nationalityidlist" class="form-control">
                                                <option   value=''>الجنسية</option>
                                                @foreach($tblnationalitys as $nation)
                                                    <option  <?php if(old('nationalityidlist')==$nation->id) echo 'selected' ?> value={{$nation->id}} >{{$nation->nationalityname}}</option>

                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-3 col-sm-6">

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">  الغرفة</label>
                                        <div class="col-md-8">
                                            <input type="text" ID="roomno" name="roomno" value="{{ old('roomno')}}" class="form-control" />

                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">الهاتف   </label>
                                        <div class="col-md-8">
                                            <input type="text" ID="mobile" name='mobile' value="{{ old('mobile')}}" class="form-control" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">الكلية</label>
                                        <div class="col-md-8">
                                            <select id="collegelist" name="collegelist"  class="form-control">
                                                <option selected value=''>الكلية</option>
                                                @foreach($tblcolleges as $college)
                                                    <option  <?php if(old('collegelist')==$college->id) echo 'selected' ?> value={{$college->id}} >{{$college->collegename}}</option>

                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"> التحويلة </label>
                                        <div class="col-md-8">
                                            <input type="text" ID="extension" name="extension" value="{{ old('extension')}}" class="form-control" />

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">



                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">نوع الغرفة</label>
                                        <div class="col-md-8">
                                            <select id="roomtypelist" name="roomtypelist" class="form-control">
                                                <option  value=''>نوع الغرفة</option>
                                                @foreach($tblroomtypes as $roomtype)

                                                    <option    <?php if(old('roomtypelist')==$roomtype->id) echo 'selected' ?> value={{$roomtype->id}} >{{$roomtype->roomtype}}</option>

                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label class="control-label"> الفصل</label>
                                            <input id="chk" name="chk" type="checkbox" onclick="enablesem(this)" />
                                        </div>

                                        <div class="col-md-8">
                                            <select ID="semlist" name="semlist"  disabled="true" Font-Bold="True" ForeColor="Red" Font-Size="8pt" class="form-control">
                                                @foreach($tblsems as $tblsem)

                                                    <option   <?php
                                                              if(old('semlist')!=null) {

                                                        if(old('semlist')==$tblsem->id) echo 'selected';}else echo 'selected' ?>   value={{$tblsem->id}} >{{$tblsem->semalias}}</option>

                                                @endforeach
                                            </select>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">

                                    <div class="form-group">




                                        <div class="col-md-8">
                                            <input type="submit" ID="btnsearch" value="بحث" class="btn btn-info btn-ls" />

                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">  </label>
                                        <div class="col-md-8">

                                            <button id="btnreset" name='btnreset' Class="btn btn-info btn-ls" type="reset" value="Reset" onclick="Reset(this)">Reset</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">

                                    <div class="form-group">


                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">

                                    <div class="form-group">



                                    </div>
                                </div>



                            </div>
                        </fieldset>
                    </form>

        {{ $tblstudents->links() }}
        <table id="stdtable" border="1" style="border-collapse:collapse" class="table">
            <thead>
            <tr style='background-color:Highlight;'>
                <th style="text-align:center"> ت</th>

                <th style="text-align:center"> ر الجامعي</th>
                <th style="text-align:center"> الاسم</th>
                <th style="text-align:center"> المبنى</th>
                <th style="text-align:center"> الهاتف</th>
                <th style="text-align:center"> الكلية</th>
                <th style="text-align:center"> ن الغرفة</th>
                <th style="text-align:center"> رقم الغرفة</th>
                <th style="text-align:center"> الجنسية</th>
                <th style="text-align:center"> المنطقة</th>
                <th style="text-align:center">  المانح</th>
                <th style="text-align:center"> التحويلة</th>
            </tr>

            </thead>

            <tbody style="text-align:center">

            @foreach($countarr as $cnt)

                <h4>عدد السجلات {{$cnt}}</h4>
            @endforeach
            <?php
            $page=app('request')->input('page');
            if($page==null)
            $i=1;
                    else
                        $i=($page-1)*50+1;
            ?>
            @foreach($tblstudents as $std)


            <tr>
            <td style="text-align:center"> {{$i}}</td>

            <td style="text-align:center">{{$std->stdid}}</td>
            <td style="text-align:center"> {{$std->fname}}</td>
            <td style="text-align:center"> {{$std->tblbuilds->build}}</td>
            <td style="text-align:center"> {{$std->mobile}}</td>
            <td style="text-align:center"> {{$std->tblcolleges->collegename}}</td>
            <td style="text-align:center">{{$std->tblroomtypes->roomtype}}</td>
            <td style="text-align:center"> {{$std->roomno}}</td>
            <td style="text-align:center"> {{$std->tblnationalitys->nationalityname}}</td>
            <td style="text-align:center"> {{$std->country}}</td>
            <td style="text-align:center"> {{$std->donor}}</td>
            <td style="text-align:center"> {{$std->extension}}</td>
            </tr>
            <?php
            $i++;
            ?>

            @endforeach
            </tbody>

        </table>



        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">



                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                        <div class="row" style="text-align:center">

                            <h1><span id="stdname"> </span></h1>

                        </div>
                    </div>

                    <div class="modal-body">


                        <img class="img-responsive img-rounded" id="imgstd" />

                    </div>

                </div>

            </div>
        </div>




 </div>

<script>
    function enablesem(check){
        $(check).change(function() {


            $( "#semlist" ).prop( "disabled", !check.checked );
        });
    }

    function Reset(btnreset){


        var items = $("#semlist option").length;
        $("#semlist")[0].selectedIndex=items-1;
        $( "#semlist" ).prop( "disabled", true );
        $( "#chk").prop( "checked", false );

     }


</script>
@endsection