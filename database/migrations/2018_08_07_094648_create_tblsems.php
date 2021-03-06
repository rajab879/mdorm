<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblsems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('tblsems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('semalias');
            $table->string('semn');
            $table->integer('active')->default(null);
            $table->integer('write')->default(null);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblsems');
    }
}



//INSERT INTO `tblsem` VALUES (1,'s2_08_09_','الفصل الثاني 2008_2009','ف ثان 2008-2009       ',1,0),(2,'s3_09_','الفصل الصيفي 2009','ف صيفي 2009',1,0),(3,'s1_09_10_','الفصل الاول 2009_2010','ف اول 2009-2010',1,0),(4,'s2_09_10_','الفصل الدراسي الثاني 2009_2010','ف ثان 2009-2010                   ',1,0),(5,'s1_10_11_','الفصل الدراسي الاول 2010 2011','ف اول 2010-2011         ',1,0),(6,'s2_10_11_','الفصل الدراسي الثاني 2010-2011','ف ثان 2010-2011       ',1,0),(7,'s1_11_12_','الفصل الدراسي الاول 2011-2012','ف اول 2011-2012                            ',1,0),(9,'sall_','جميع الفصول','ج                                                 ',1,0),(10,'s2_11_12_','افصل الدراسي الثاني 2011-2012','ف ثان 2011-2012                    ',1,0),(12,'s1_12_13_','الفصل الدراسي الاول 2012-2013','ف اول 2012-2013',1,0),(14,'s2_12_13_','الفصل الدراسي الثاني 2012 2013','ف ثان 2012-2013',1,0),(15,'s3_13_','الفصل الدراسي الصيفي 2013','ف صيفي 2013',1,0),(16,'s1_13_14_','الفصل الدراسي الاول 2013-2014','ف اول 2013-2014',1,0),(17,'s2_13_14_','الفصل الدراسي الثاني 2013-2014','ف ث 2013-2014',1,0),(28,'s3_2014','الفصل الصيفي 2014','ف صيفي 2014',1,0),(31,'s1_14_15_','الفصل الدراسي الاول 2014 - 2015','ف اول 2014 2015',1,0),(32,'s2_14_15_','الفصل الدراسي الثاني 2014 - 2015','ف ثان 2014 - 2015',1,0),(33,'s3_15_','الفصل الصيفي 2015','ف صيفي 2015',1,0),(34,'s1_15_16_','الفصل الدراسي الاول 2015- 2016','ف اول 2015- 2016',1,0),(35,'s2_15_16_','الفصل الدراسي الثاني 2015 - 2016','ف ثان 2015 - 2016',1,0),(36,'s3_16_','الفصل الصيفي 2016','ف صيفي 2016',1,0),(37,'s1_16_17_','الفصل الدراسي الاول 2016- 2017','ف اول 2016- 2017',1,0),(38,'s2_16_17_','الفصل الدراسي الثاني 2016 - 2017','ف ثان 2016- 2017',1,1);
