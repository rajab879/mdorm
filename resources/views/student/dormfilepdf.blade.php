<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Pdf Test</title>
<style>
    div{
        margin: 0 auto; /* or margin: 0 auto 0 auto */
    }
    table {
        border-collapse: collapse;

        width:100%;

    }
    .makeborder   tr td
    {
        border: 2px solid   ;
    }
    @font-face {
        font-family: 'arabicttrans';
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        src: url("fonts/artro.ttf") format("truetype");
    }
    table{
        font-family: arabicttrans!important;
    }
</style>
</head>
<body>
<div style="direction: rtl;    text-align: center;">
    <h1 style="font-family:  sans-serif;direction: rtl">جامعة الشارقة</h1>
    <table border="0"    style="font-family:sans;direction:rtl;  ">

        <tr style="direction:rtl">
            <td style="width: 33%">جامعة الشارقة<br>
                عمادة شؤون الطلاب <br>
                قسم السكن الجامعي    <br>
            </td>
            <td style="text-align: center;width: 33%">
                <?php $image_path = '/images/uoslogo.jpg'; ?>
                <img src="{{ public_path() . $image_path }}" style="width:100px;height: 100px;" >

            </td>
            <td style="text-align: left;width: 33%"> الفصل الدراسي الاول
                2019-2018</td>
        </tr>

        <tr style="direction:rtl">
            <td>
            </td>

            <td style="text-align: center;">
                <h3> نموذج تسكين غرفة</h3>

            </td>
            <td>
            </td>
        </tr>
    </table>



    <table  class="makeborder" style="font-family: sans;direction:rtl;  ">

        <tr style="direction:rtl">

            <Td   >اسم الطالب</Td>
            <Td  >الرقم الجامعي </Td>
            <Td  >الكلية</Td>
            <Td  >الغرفة</Td>

            <Td   >  المبنى</Td>
            <Td  >الهاتف   </Td>
            <Td  >المانح</Td>
            <Td  >المنطقة</Td>
            <Td  > الجنسية</Td>
        </tr>
        <tr style=" dir:rtl">
            <Td   >اسم الطالب</Td>
            <Td  >الرقم الجامعي </Td>
            <Td  >الكلية</Td>
            <Td  >الغرفة</Td>

            <Td   >  المبنى</Td>
            <Td  >الهاتف   </Td>
            <Td  >المانح</Td>
            <Td  >المنطقة</Td>
            <Td  > الجنسية</Td>
        </tr>
    </table>
    <span  style="font-family:  sans-serif;direction:rtl;font-weight: bold;font-size: 13pt; ">
        تعهد<br>
    </span>

    <span  style="font-family:  sans-serif;direction:rtl;font-size: 11pt; ">
         استلمت محتويات الغرفة المبينة أدناه بحالة سليمة وجيدة  و أتعهد بالمـحافظة عليها و إعــادة المفقود منها و إصــلاح التالف أو دفع قيمته ،وبعدم الكتابة أو إلصاق الصور والملصقات على الجدران والأبواب والخزائن والشبابيك ، كما أتعهد بإعادة مفتاح الغرفة  وتسليم محتوياتها وعدم ترك أية أمتعة شخصية فيها عند مغادرتي النهائية لها ، علما بأن إدارة   السكن الجامعي غير مسئولة عما يترك في الغرفة بعد تركها نهائيا ولن يسمح بتبديل أو تغيير أي من المحتويات بعد استلامها
     </span>

    <table  class="makeborder" style="font-family:  sans-serif;direction:rtl;  ">

        <tr style="direction:rtl">

            <Td   > 01</Td>
            <Td  > سرير خشبي مع مرتبة   </Td>
            <Td  >06</Td>
            <Td  >   طاولة شاي</Td>

            <Td   >  11</Td>
            <Td  >سخان كهربائي   </Td>

        </tr>
        <tr style=" dir:rtl">
            <Td   > 02</Td>
            <Td  > مكتب خشبي مع كرسي   خشبي / عجلات   </Td>
            <Td  >07</Td>
            <Td  > جهاز هاتف  </Td>

            <Td   >  12</Td>
            <Td  >مفتاح الغرفة : داخلي   /  خارجي   </Td>
        </tr>
        <tr style=" dir:rtl">
            <Td   > 03</Td>
            <Td  > خزانة خشبية مع مفاتيح / بدون    </Td>
            <Td  >08</Td>
            <Td  >   متحكم المكيف</Td>

            <Td   >  13</Td>
            <Td  >الجدران وزجاج النافذة     </Td>
        </tr>


        <tr style=" dir:rtl">
            <Td   > 04</Td>
            <Td  > ثلاجة كهربائية  </Td>
            <Td  >09</Td>
            <Td  >     ستائر شباك</Td>

            <Td   >  14</Td>
            <Td  >      </Td>
        </tr>
        <tr style=" dir:rtl">
            <Td   > 05</Td>
            <Td  > شبك النافذة  </Td>
            <Td  >10</Td>
            <Td  >     خزانة جنب السرير</Td>

            <Td   >  15</Td>
            <Td  >      </Td>
        </tr>
    </table>
    <span  style="font-family:  sans-serif;direction:rtl;font-weight: bold;font-size: 13pt;text-decoration: underline ">
        على مشرف السكن تسليم الطالب البنود المذكورة أعلاه بندا بندا  مع ذكر ملاحظة إزاء أي من البنود التي تحتاج لذلك<br>
   النواقص
    </span>
    <table  class="makeborder" style="font-family:  sans-serif;direction:rtl;  ">


        <tr style=" dir:rtl">
            <Td   > 01</Td>
            <Td  >  ..................  </Td>
            <Td  >05</Td>
            <Td  >   ..................   </Td>


        </tr>
        <tr style=" dir:rtl">
            <Td   > 02</Td>
            <Td  >    ..................     </Td>
            <Td  >06</Td>
            <Td  > ..................  </Td>


        </tr>


        <tr style=" dir:rtl">
            <Td   > 03</Td>
            <Td  >   ..................   </Td>
            <Td  >07</Td>
            <Td  >    ..................    </Td>


        </tr>
        <tr style=" dir:rtl">
            <Td   > 04</Td>
            <Td  >    ..................  </Td>
            <Td  >08</Td>
            <Td  >   ..................     </Td>


        </tr>


    </table>
    <span  style="font-family:  sans-serif;direction:rtl;font-size: 11pt; ">
          إقــــــرار<br>
    أتعهد أنا الموقع أدناه بالالتزام بقانون الجامعة ولوائحها التنظيمية وبتعليمات عمادة شؤون الطلاب والسكن الجامعي ،ومخالفتي لها أو جهلي بها لا يعفيني من المسؤولية أو المسائلة ، كما لا أمانع من دخول مشرف السكن إلى غرفتي في أثناء غيابي عند الضرورة .

            </span>

    <table  class="makeborder" style="font-family:  sans-serif;direction:rtl;  ">


        <tr style=" dir:rtl">
            <Td style="width: 30%"  > التاريخ</Td>
            <Td style="width: 30%" >    22/5/2018 </Td>
            <Td style="width: 20%" >توقيع الطالب</Td>
            <Td style="width: 20%" >       </Td>


        </tr>
        <tr style=" dir:rtl">
            <Td   > اسم المشرف الذي سلم الغرفة</Td>
            <Td  >       رجب عوض   </Td>
            <Td  > توقيع المشرف</Td>
            <Td  >    </Td>


        </tr>





    </table>

</div>
</body>
</html>