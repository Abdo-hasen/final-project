 - shortcut 
###########################################


emmat symbols meaning 
---------------------------- 


ال * : عدد مرات التكرار 

ال .  : كلاس داخل التاج 

ال < : تاج داخل التاج 

-----------------------------------------------------------

.container then enter + .row +enter + . col-4 or .col-12 
+enter 
or :     .container>.row>.col-4 + enter
which col-4 for card & other for table :
كود بوتسستراب يستخدم ل تنسيق (card - table )
كاني بعمله صندوق وبظبطله طول وعرض 
فبدل ميلزق ق الشمال خالص بخليه يبان 



----------------------------------------------
alt + z = undo
alt + y = redo

------------------------------------------------
alt + tab = للتنقل بين ايقونات الويندوز 
دوس مره واحده ع التاب ثم اتحرك بالاسهم 

----------------------------------------------
comment : ctrl + / 

----------------------------------------------

ul>li*3 : 

حيث علامه اكبر معناها : جواها او تبعها 
يعني يو ال جواها 3 ال اي 
و * : معناها عدد مرات تكرار 

----------------------------------------------

alt + z = word wrap in vs studio 

لوعندك سطور طويله وحابب ينزهالك سطر عشان يبقي كله باين عندك 
للقراه والتنظيم 
استخدمها 

------------------------------------------------



- function need echo in array * and other dont need *  : 

  gettype
  count 
  array_sum


  ---------------------------------------------------

 يبقي كله طبيعي او تقليدي array by referance 
والعكس call by value مثل : 
<!--
  يعني ايه : 
   يعني من الاخر  حطها في متغير 
   او خليها قيمه لمتغير
وهو ده الاراي الجديده وده اللي هتعمله برنت ار 

 -->

array reverse 

array_values


-------------------------------------------------

find & replacr in vs : ctrl + f :
ولو ريبلاس فاضي هيمسح

----------------------------------------------

معظم الفانكشن بتبدا  الاسترنج ماعدا : 

Replace :  هتبدل ايه -  ثم الباقي 

implode & 
 : هتفصل بايه - ثم الباقي 

-----------------------------------------------------------------------------------------------------------

الكل بيكتب عادي يعني من غير _ ماعدا 
: 
Str_replace 
Str_word_count 
Str_repeat
Str_shuffle
split_chunk


-------------------------------------------------

Alt + tab :  
عشان تحول بين التابات،  كروم و vs 
بيجيبب اخر اتنين مفتوحين ورا بعض 

---------------------------------------------------

F5 .... Reload 
f3.....search 
f11...full screen
f2..rename
f3...search

---------------------------------------------------

ctrl + tab : shigting  between tabs 

---------------------------------------------------

.container>.row>table.table.table-bordered : 
تابل متروق عليه - بس امشي مع ايميت مره واحده عشان تظبط 
يعني لازم يظهرلك ان ده ايميت 












1- first program : installation - syntax 
###########################################

<?php

echo "php <br>";
echo "course <br>";
echo "For Beginner";


echo "<hr>";

print "php course";


?>


<!-- 
  echo vs print : 

  -echo and print are more or less the same. They are both used to output data to the screen.

-The differences are small: echo has no return value while print has a return value of 1 so it can be used in
 expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. 


 echo is marginally faster than print.

-The echo and print  statement can be used with or without parentheses: echo or echo().

يبقي ايكو بتتطبع لكن مفيش قيمه بترجع او بتتخزن ف الميموري 
لذلك اي expression 
الافضل معاه برينت 

   - echo can take multiple parameters :


    echo "this ",
         "string ",
         "is ",
         "made ",
         "with multible parametrs.";

     - echo — Output one or more strings so 
     cant use with array    

 -->
  
<!-- 
  - ملاحظات الوان vs : 
- " " : اي حاج بينهم بني 
- tags : ازرق 
- طباعه زي ايكو وبرنت : اصفر 
- اي تيكست بالابيض 

رقم root او htdocs : 
127.0.0.1

اكواد html : 
1- جوا تاج html 
2- جوا تاج php : بين " " 
ex :  echo "php <br>";

ممكن تكتب اكواد php داخل اي مكان ف الاسكريبت بس جوا تاج php 
مثل : داخل تاج html 
ex :   <td><?php echo "abdo@eraasoft.com"; ?></td>


لو عايز ت higlight حاجه في body كجدول : 
بتحطها ك th بدل td 

اللغه بتدعم الرقم من غير " " 
ex :       <td><?php echo 20000; ?></td>


 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "php course"; ?></h1>
    <h2>colors</h2>
   <ul>
     <li><?php echo "red"; ?></li>
     <li><?php echo "white"; ?></li> 
     <li><?php echo "black"; ?></li> 
     
   </ul>
</body>
</html>

<hr>




 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1><?php echo "Hello, world php!"; ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "Card title php"; ?></h5>
                    <p class="card-text"><?php echo " php Some quick example text to build on the card title and make up the bulk of the card's content."; ?></p>
                    <a href="#" class="btn btn-primary"><?php echo "Go somewhere"; ?></a>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">age</th>
      <th scope="col">salary</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo "abdo hasen";?></th>
      <td><?php echo "abdo@eraasoft.com"; ?></td>
      <td><?php echo 26; ?></td>
      <td><?php echo 20000; ?></td>
    </tr>
  </tbody>
</table>
            </div>
        </div>    

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>



 2- variable 
 ##############################

 
/*
- echo done with variable name 
- = : its an assighment operator not meaning 
equal : 
يعني اخدت قيمه اسندتها او خزنتها 
ف المتغير ده او ف المكان الي محجوز ف الميموري 

*/

$age = 35;
echo "$age <br>";

$name = "eraasoft";
echo $name;

echo "<hr>";

/*
- why i use comments : 
descripe code for me or others 
stop code from excustion 

- 2 types : 
one line by :  //
multible line : باك سلاش ونجمه والعكس

*/

// name of company 
$name = "eraasoft";
echo $name;

/* 
$name = "eraasoft";
echo $name;
*/

echo "<hr>";

/*
variable syntax : 
 - start with dollar sign $
 - contain letters and numbers : ex $name2
 canot add number at first - but can in middle 
 and last  : $2name - wrooong  
 - contain _ : 
 only symbol can add 
 - dont use white space : ex : $na me 
 */

?>

<p>pracice on variable</p>
<!-- 
    - اسم مكون من جزئين افصل بينهم ب _ 
    ex : page_name

    - خد بالك لو عايز ت inject كود php داخل 
    html او غيرها لازم تفتح 
    تاج php 
 -->

 <!-- html +php variable  -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
     $page_name = "about";
    ?>
    <title><?php echo $page_name ?></title>
  </head>
  <body>
    <?php  
        $title_name = "about page from php variables ";
    ?>
    <h1><?php echo $title_name ?></h1>
  </body>
</html>

<hr>

<!-- 
    - رقم التليفون يعتبر تيكست مش رقم فتعمله بين " "
    - abbriviation : 
    .container>.row>.col-4 + enter
 -->

 <!-- bootstrap card + php variable -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>users</h1>

    <?php
            $name = "Abdo";
            $phone = "01011608515";
            $email = "abdohasen@eraasoft.com";
    ?>

    <div class="container">
        <div class="row">
            <div class="col-4">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $name; ?></h5>
                <p class="card-text"><?php echo $email; ?></p>
                <a href="#" class="btn btn-primary"><?php echo $phone ?></a>
            </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

<hr>

<?php 

    /*

     - x = y 
      انك هتجيب القيمه اللي اسمها y 
      وتاخد نسخه منها وتعملها assign جوا x 
     و y  هتفضل زي ماهي 
: 
 من الاخر اخدت قيمه Y نسختها في X 
 و Y هتفضل زي مهيا

      - overridding :
      ببساطه المتغير هو قيمه متخزنه في الميموري 
      فانت روحت شيلت القيمه دي وغيرتها بغيرها  

    */

    // swapping  with third varaible : 

    // الفكره ان هجيب كوبايه فاضيه 
    // اللي هو متغير تالت 
    // واسواب بينهم 
    // ليه بجيب كوبايه 3 : لاني لو عملت اسواب بيهم هيحصل اوفررايد 
    // فانا  عايز حاجه تحفظلي القيمه
    //  من الاخر ابدا من z ولف : z,x,y 
    // x تكب ف z  يعني z= x 

    $x = 5;
    $y = 10;
   
   
    $z = $x; // ممكن يتم تعريف متغير بالاسناد 
    $x = $y;
    $y = $z;


    echo " x = $x" . "<br>";
    echo " y = $y"  . "<br>";


// swapping with override
// <!--  //use + & -  -->

  $x = 5;
  $y = 10;
   
  $x = $x + $y;
  $y = $x - $y;
  $x = $x - $y;

   echo "$x <br>" , "$y";

  //  <!--  use * & /  -->

  $x =$x *$y;
  $y =$x /$y;
  $x =$x /$y;

   echo "$x <br>" , "$y";
   
    
?>

<hr>

<?php 

// variable of variable : 
// يعني اخدت قيمه الفريبل وخليتها فريبل اخر 

    $name = "mostafa";
    $$name = "name"; //equal : $moatafa = "name";
    
    echo $mostafa . "<br>";
    echo $$name; // equal : echo $mostafa; 

    
?>

<hr>

<?php 

// constant : 
//  هو شئ ثابت لايمكن تغيره او اوفررايد عليه
// مثل موقع يفرض ضريبه ثابته 
// ع كل منتج لا تتغير 


    define("TAX",500); 
    // 2 argument : const name capital - value
    echo TAX; // echo done by const name capital

    // const TAX = 50; // another way to write constant
    // echo TAX;
    
?>

------------------------------------------------

swapping function 
--------------------- 

<?php

function swapping($n1,$n2){

   echo " n1 is : " . $n1 . "<br>";
   echo " n2 is : " . $n2 . "<br>";

   $n1 = $n1 + $n2;
   $n2 = $n1 - $n2;
   $n1 = $n1 - $n2;

   echo "after swappind : <br>";
   echo " n1 is : " . $n1 . "<br>";
   echo " n2 is : " . $n2 . "<br>";

}

$number1 = rand(10,20);
$number2 = rand(10,20);

swapping($number1,$number2); // ممكن الارجيمنت تبقي باسم غير البراميتر


?>
   
------------------------------------------------------------------   

3- expression and errors 
############################


expression & operant : 

<!-- 

  
ال php بتتعامل مع كل حاجه تقريبا انها expression 

اي حاجه بتؤول ف النهايه الي قيمه...  بتترجم ف النهاية لقيمه اقدر اطبعها او اعمل عليها عمليه حسابيه واقدر اتعامل معاها 

كل لغات البرمجة بتدعم العمليات الحسابية المعروفه 
مثل :  
5 +  6 + 7 
 :  كلهم ع بعض اكسبريشن،  لانهم بيترجموا ف التهايه الي قيمه الا وهي 18 
 وكل واحد فيهم اسمه operant ، وعلامه + operator 

echo $z + $ y : 
واتا بقوله z ..بقوله هات القيمه اللي جوا z 


Expressions  :

Expressions are the most important building blocks of PHP. In PHP, almost anything you write is an expression. The simplest yet most accurate way to define an expression is "anything that has a value". The most basic forms of expressions are constants and variables.

Almost everything in a PHP script is an expression. Anything that has a value is an expression. In a typical assighment statement ($x=100), a literal value, a function or operands processed by operators is an expression, anything that appears to the right of assighment operator (=)


بالبلدي : اي حاجه فيها operator 


 -->


<?php

    echo 5 + 6 ; //
    6 or 5 is operant - او معامل and
     + is operator

    echo $x + $y ;// العمليه الحسابيه كلها ع بعضها = expression 



    Syntax
$x=100; //100 is an expression
$a=$b+$c; //b+$c is an expression
$c=add($a,$b); //add($a,$b) is an expresson
$val=sqrt(100); //sqrt(100) is an expression
$var=$x!=$y; //$x!=$y is an expression


?>

<hr>

<!-- 
  dealling with errors 
  ####################

  - anatomy of error : 
  type : ex : parse error 
  massage : ex  syntax error 
  patth and file : ex  e/ php cousse/error .php
  line : ex line 87
  - focus on massage and line when tracing error -
 -->

 ----------------------------------------------

 4- DATA TYPES 
 ################################

 <?php

// boolean : yes or no - اه او لا 
//   true : مثل الحقائق والثوابت - 
// اي حاجه غير فولس 
// او 1 
//   false : 0 - لا - فاضي - off

// $sun = true; // output : 1
// $salary = false; // outut : فاضي او مفيش 

 //echo $sun;


// 2- integer : 
// no decimal point even o 
//ex : 15.0 IS FLOAT- NO INTEGER
// عدد صحيح من غير علامه عشريه 

$age = 15;


// FLOAT OR DOUBLE : have decimal point 
// به علامه عشريه

$price = 150.5;

// string : 
// chain of character 
// text 
// phone number consider string

$name = "eraasoft";

/* 
 null : 
 يعني فاضي او مفيش مش صفر 
  وبيتكتب كلمه نال نفسها 
 مثلا حاجه في داتا بيز متخزنتش 
 $x = ""; // text not null

*/

$x = null;


/*
array : 
مجموعه من المتغيرات 
يعني الوان مش لون واحد 

*/

$colors = ["red","blue"];


// object : oop

class User{

}
$user1 = new User(); 

// RESOURCE : 
//  يعني حاجه خار ج بي اتش بي 
//  يعني بتكونكت معاها 

//$file = fopen("data.txt","r");

//echo gettype($file);

echo "<hr>";

----------------------------------------------

<h1>type juggling : 
</h1>
####################

<!-- 

روح ع العملي علطول 
  
type juggling : 

مثال : لو بجمع 5 انتيجر ع "15"  استرنج 
هتحس ان دي عمليه حسابيه  بذكائها فهتجمع الاتنين،  برغم ان حد فيهم استرنج وهتخلي اانتيجه انتيجر،  لان ناتج العمليه الحسابيه هيبقي رقم يعني انتيجر 
او هخلي النتيجه ع حسب نوع من الاتنين،  ع حسب العمليه بتاعتي،  فممكن ناتج : سترنج او انتيجر او فلوت 

ولكن لو خليتها  خمستاشر بويند : 
هيعملها وهيتجاهل pound ولكن هيديك 
Warning : non- numeric value
لو عملت : type casting (int) ،  هيشيل الايرور


ولكن لو خليتها "pound 15  " :  
مش هيعملها وهيديك fatal error وهيوقف الكود كله
لانك ابديت بسترينج فانت عايز استرينج 
استرينج +  انتيجر مينفعش 
لو عملت : type casting (int) ، هيحل المشكله



Type juggling :

-Type juggling means dealing with a variable type. In PHP a variable type is the context in which it is used. If an integer value is assigned to a variable, it becomes an integer. If a string value is assigned to the variable, it becomes a String.

يعني اللغه بتحدد نوع البيانات بنفسها - حسب السياق والمكتوب

جاكلينج يعني تكهن - فهي بتخمن نوع البيانات حسب قواعد هي حطاها 


 -->

 <p>

  
  // $tax = "15";
  // $count = 5;

  // $total = $tax + $count; // 20 - integer
  // echo $total;
  
  // echo "<br>";  

  // echo gettype($total);


  // $tax = (int) "15 pound "; // "warning" 20 integer - int : remove warning -
  // $count = 5;

  // $total = $tax + $count;
  // echo $total;

  // echo "<br>";  

  // echo gettype($total);


  $tax   = "pound 15"; 
  $count = 10;

  $total = $tax + $count;
  echo $total; // fatal error - solution : type casting 

  echo "<br>";  

  echo gettype($total);


 </p>


 -------------------------------------------------
 

/*

    type casting : 
    هو التحويل من نوع بيانات الي نوع بيانات اخر 
    مثلا انا لو جايلي سعر ك سترينج من فورم 
    انا هحوله لانتيجر وهخزنه ف داتا بيز كانتيجر 

    () : CALL PARENCETHIS

*/

$price = (int) "50";
echo gettype($price);

echo "<hr>";



?>

---------------------------------------------------

5- functions : 
###########################################


<?php

    /*

    
        الفانكش هو عمل بمبدء 
        دري يعني متكررش نفسك 
        فانا عندي مجموعه اكواد بحتاج اكررها 
        فبدل مااقعد اكتبها كل مره بسميها باسم 
        واستدعيها باسمها 
        فبوفر وقت ومجهود 
        وكمان لو حبيت اعدل ع حاجه 
        بعملها مره واحده  
        فمن الاخر هي : 
        بلوك اوف كود ليه اسم 
        بستدعيه باسمه وقت الاحتيياج 
        فيتنفذ الكود
        مثل استماره البطاقه عي تمبلت ثابت 
        بستدعيه لما اعوزه 
        باسمي 

      - syntax : 
      function + function name (){
         block of code 
      }
      // اقواس الفانكشن : قوسين برميتر - قوسين فانكشن 

    */

    //decleration (meaning : announcement)
    function sum(){
        echo 5 + 6 . "<br>";
    }

    // calling or invoking : اسم الفانكشن + قوسين الفانكشن 
    sum();
    sum();

    echo "<hr>";

    function typehello(){
        echo "hello hamada again <br>";
    }  

    typehello();
    typehello();
    
    echo "<hr>";



?>

<?php 

/*

    parameter : 
    ما هي الا متغيرات او فريبلز بس بندلعها 
    عشان الموضوع يبقي دينمك واقدر اغير فيه
    مثل استماره البطاقه وانا بمرر فيها اسم الشخص
    بيبقي مختلف  ف كل مره بستدعيها يعني حاجه متغيره 
    فمثلا بمرر برميتر رقمين 
    ولما بستدعي الفانكشن بحط الاراقام اللي محتاجها 
    فده يعتبر دينمك 
    كما بالمثال  


*/

    function plus($number1,$number2){
        echo $number1 + $number2;
    } 

    plus(55,10);
    echo "<br>";
    plus(55,10);
    echo "<br>";
    plus(55,10);
    echo "<br>";
    plus(55,10);
    echo "<br>";

    echo "<hr>";


?>

<?php

/*

            return : 
يعني بترجع الحاجه مش بتطبعها 
فمثلا عمليه حسابيه برجع قيمه او بخزنها ف الميموري مثل الفريبل 
واقدر اتعامل بالقيمه و assign القيمه او اخزنها  ف اي مكان 

- لازم لو كتبت 2 parameter 
تمرر الاتنين والا هيديك fatal error (وده اعلي ايور موجود )

- return in decleration 
   echo in calling
عود نفسك تريترن ف الفانكشن
 وت ايكو ف الاستدعاء  

- كتابه اسم الفانكشن : 
لو مركب اكتبهم جنب بعض من غير _ وخلي بدايه الاسم التاني كابيتل مثل : fullName 

- space in string (concatnate): 
return $first_name . " " . $last_name;


 - ممكن تعمل كولينج قبل ديكليرشن 
وهتتنفذ الفانكشن عادي 
لان الكومبلير هيدور ع الديكليرشين ولو لقاه هينفذ



*/

    function minus($number1,$number2){
        return $number1 - $number2;
    }

    echo minus(5,10);

    echo "<hr>";

    function fullName($first_name,$last_name){
        return $first_name . " " . $last_name;
    }

    echo fullName("Abdo","Hassen")    


?>

-------------------------------------------------

Math Functions
###################################

<!-- 

  /*
    Math Functions

    - ceil(Number[Required])
    --- Round Up To Integer

    - floor(Number[Required])
    --- Round Down To Integer
  */

  // -1 -2 -3 -4 -5 -6
  // 1  2  3  4  5  6

  
Math functions  : 

الفانكشن بتعمل تقريب للرقم...  ف 3 : 
Ceil... Floor... Round 


Ceil : 

سقف..  يعني.بتقرب الارقام  لفوق لاقرب عدد صحيح 

مهما كان العدد بتقربه لتحت،  حتي لو 5.01 هتقربه ل 6 

مع السالب : قرب لفوق يعني نحيه الارقام الموجبه او 0،

Floor : 

ارضيه يعني.بتقرب الارقام  لتحت لاقرب عدد صحيح

مهما كان العدد بتقربه لتحت حتي لو 5.99 ..هتقربه ل 5

مع السالب : قرب لتحت يعني نحيه الارقام السالبه

تعامل الاتنين مع السالب او negative values : 

ملحوظه : -5 اكبر من -6 ..لان -5 اقرب ل 0 والاعداد الموجبة من الاخو يعني ماشي بالعكس 

يعني كل واحده بتعكس طريقتها مع الارقام النيجتف 


 -->

<p>
<!-- ceil -->
  echo ceil(5.1) . "<br>"; //6
  echo ceil(-5.1). "<br>"; //-5

  <!-- floor -->
  echo floor(5.99) . "<br>";//5
  echo floor(-5.99). "<br>";//-6

</p>

-----------------------------------------------------------------------------------------------------------

6-   array 
################################


/*  intro : 

- الاراي هي فريبل ولكن بتشيل اكتر من قيمه 
ولذلك فريبل : مكان ف الميموري بيشيل قيمه واحده 
لكن الاراي مكان ف الميموري بيشيل اكتر  من قيمه 
الاراي مثل القطر - مكون من عربات 
كل عربيه شايله ناس جواها 
ع عكس التوكتوك او الصندوق حاجه واحده 

- شرح الصوره 1 :  مثلا اراي من 0 ل 9 
ده اراي او قطر شايل عشر قيم 
كل قيمه بتتخزن ف الميموري 
وعشان اوصل لاي عنصر من عناصر الاراي 
اوعربيه من عربيات  القطر محتاج index 
والاندكس هو رقم بيشير لمكان جوا الاراي او عربيه من عربيات القطر 
يعني قطر جواه عشرعربيات 
كل عربيه  اخده  رقم  اندكس  يونيك 
بنبتدي من صفر حتي اخر عنصر ف العربيه  "اخر عنصر متغير "
lenghth = count = index + 1 "عدد العناصر"
index = length or count-1 

- الاراي ف بي اتش بي دينمك 
- يعني ممكن تشيل اي نوع من البيانات مثل : 
name as string - age as integer - price as float 

- ازاي اوصل لاي مكان في الاراي :
اسم الاراي + اندكس او كي بتاع العنصر 


- انواع الاراي : 

1 -indexed ; value
العنصر بيتكون من شق واحد الا وهو القيمه او value 
العنصر يكون داخل اقواس الاراي ويفصل بين العناصر ب ,

2- assoshitave :  
العنصر بيتكون من شقين 
key "index" => value 

3- multidementional array : 
مالتي يعني متعدد يعني arrays جوا اراي 
arrays in array
arrays دي ممكن تبقي اندكست او اسوشيتيف  

- الطباعه - echo :
indexed : by index 
associa : by key
multi : by index of array - index or key of element  
mean : index of index 


*/ 




indexed array : 

- بمعني الفهرس زي فهرس الكتاب 
فمثلا اندكس 1 شايل قيمه :لون احمر 
فهو بيشير للقيمه دي 

- هي اراي يتكون عناصرها من شق واحد مثل : red - white 

- سنتاكس  : 
يتم كتابته اسم الاراي 
 بقواعد المتغير لانها متغير 
مع اقواس الاراي [ ] او سكوير براكتس 
ويكتب بداخلها قيم يفصل بينها ب كوما , 
وفي النهايه سيمي كولون ; 

- ملاحظه  التشابهات بين الفانكشن والاراي : 

الاقواس : كله بعده سيمي كولون ; ماعدا كيرلي " عايقه "
[ ] : اقواس اراي 
اقواس الفانكشن : 
( ) : اقواس parameter 
{ } : اقواس block of code 

والاستدعاء ف الفانكشن وطباعه عنصر ف الاراي الاتنين  بالاسم والاقواس ثم  سيمي كولون ; 
TYPE();    
;[0]$COLORS 

*/

/*
 نطق : colors of 2  ex : echo $colors[2]; 

لا يمكن طباعه الاراي ب ايكو
ولكن يمكن ب ايكو  طباعه عنصر من  عناصرها 
عن طريق اسم الاراي و الاندكس او الكي 
لو عايز تطبعها print_r 

لون اقواس الاراي ف vs 
اصفر 
*/



//           0      1      2          
$colors = ["red","blue","white"];

echo $colors[1]; 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php  $colors = ["red","blue","white"]; ?>

    <h1>colors</h1>
    <ul>
        <li><?php echo $colors[0]; ?></li>
        <li><?php echo $colors[1]; ?></li>
        <li><?php echo $colors[2]; ?></li>
    </ul>


</body>
</html>

<hr>

<?php


    /*

    associative array : 

 associative array : مترابطه او متصله 

- هي اراي تتكون من شقين كي وفاليو " حيث ال key هو اسم معبر عن القيمه بداخله "
ومثال لها  : اراي بتاخد شويه  معلومات محدده عن #نفس اليوزر مثل : الاسم السن الايميل "معلومات مترابطه او متصله " كما بالمثال 

- الطباعه تكون عن طريق الكي :  echo $student["name"];

- ملاحظه : 
- ممكن تنزل سطر ف قوس الاراي 
رقم فون يعتبر استرنج يعني  بين دبل كوتس " " 
بدايات كتابه سطر الكود لازم تبقي متناسقه او بتبدا من نفس الحته 
     
    */

    // $student = [
    //     "name" => "abdo hasen",
    //     "email"=> "abdo hasen@eraasoft.com",
    //     "phone"=> "01011608515"
    // ];

    // echo $student["name"];
    // echo "<br>";
    
    // echo $student["email"];
    // echo "<br>";

    // echo $student["phone"];
    // echo "<br>";+_-__-_---

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php  

        $student = [
            "name" => "abdo hasen",
            "email"=> "abdohasen@eraasoft.com",
            "phone"=> "010111608515"
        ];

    ?>

    <table>
        <thead>
            <tr>
              <th>name</th>  
              <th>email</th>  
              <th>phone</th>  
            </tr>
        </thead>
        <tbody>
            <tr>
              <td><?php echo $student["name"];  ?></td>  
              <td><?php echo $student["email"]; ?></td>  
              <td><?php echo $student["phone"]; ?></td>  
            </tr>
        </tbody>
    </table>

</body>
</html>

<hr>

<?php 

  /*


- multidiementional  :  مالتي او متعدد 
مثال : هي اراي بها معلومات او تفاصيل محدده عن منتجات متعددده يعني مالتي 

- طباعه  : 
index of array - index of element 
<?php echo $products[0][0]; ?>

- ملاحظه : 
طريقه اخري لكتابه الاراي هي بدل الاقواس بكتب اراي 
ولكن غير مستخدمه الان - كانت ف اصدارات قديمه - 5.4 

  */

//    $products = [
            //0         //1
//       ["product #1",150], //0
//       ["product #2",50],  //1
//       ["product #3",200]  //2
//    ];
   
//    echo $products[1][0];
//    echo "<br>";

//    echo $products[0][1];
//    echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <?php  
   
      $products = [
          ["product #1",150],
          ["product #2",50],
          ["product #3",200]  
      ];  
   ?>

   <table>
      <thead>
          <tr>
            <th>name</th> 
            <th>price</th> 
          </tr>
      </thead>
      <tbody>
        <!-- tr : صف 
              td : بيانات داخل الصف 
        -->
         <tr>            
           <td><?php echo $products[0][0]; ?></td> 
           <td><?php echo $products[0][1]; ?></td>  
         </tr>
         <tr>
           <td><?php echo $products[1][0]; ?></td> 
           <td><?php echo $products[1][1]; ?></td> 
         </tr>
         <tr>
           <td><?php echo $products[2][0]; ?></td> 
           <td><?php echo $products[2][1]; ?></td>
         </tr>
      </tbody>
   </table>

</body>
</html>

<?php 

/*

var dumb and print_r : 

- var dumb : 
هي بيلت ان فانكشن بتدي بياتات كامله عن المتغير من حيث : نوع البياتات وعدد العناصر
ومعلومات كامله عن العناصر للمتغير من حيث : نوعها - اندكس - عدد الحروف لو استرنج  
vs 
gettype : نوع المتغير فقط 

- print - r :

بتطبع الاراي بالاندكس 
+ تاج pre "html"  "وده للطباعه بشكل شيك"
vs 
echo:  for elments in array  not array
itself
*/

/* 

var dumb result :

   array(5) { [0]=> string(3) "red" [1]=> string(4)
     "blue" [2]=> string(5) "white" [3]=> int(25)
      [4]=> bool(true) }

 */

 
 /*
 كل بيلت ان فانكشن بتعمل ريترن وايكوا ماعدا: 

- function need echo : 
  gettype
  count 
  array_sum


*/


  $colors = ["red","blue","white",25,true];

 //var_dump($colors);
 echo "<pre>";
 print_r($colors);


?>

array function 
########################################### 


/*

count : 

  فانكشن لايجاد عدد عناصر الاراي 
  وليس الاندكس 

  - دي فانكشن بتعمل ريترن مش ايكو 
  فلازم ت ايكو معاها 

  count($array)

*/

//count number of elements : 
//echo count($colors);


/*
array unshift  ;
عشان تضيف عنصر ف اول الاراي - كاول عنصر 

arrgument : array , value 
ممكن اكتر من فاليو وبيترتبوا بترتيب كتابتهم 
  
*/

//put element at the beginning of the array 

// array_unshift($colors,"black","80");
//  echo "<pre>";
//  print_r($colors);


/*


هناك طريقتين لوضع عنصر ف اخر الاراي : 

-الاولي :  ها push العنصر ف اقواس الاراي 
لو القوس فاضي هيضاف ف لاخر 
وممكن احدد رقم الاندكس ف القوس واتحكم ف ده

-الثانيه  :  array_push 
arrgument : array , value -
ممكن اكتر من فاليو وبيترتبوا بترتيب كتابتهم 

- output for echo true is : 1 

*/


//put element at the end of array : 

// array_push($colors,"black",90); // more than one value
//  echo "<pre>";
//  print_r($colors);

// $colors[] = "black"; // one value only at once
// $colors[] = "white";
// echo "<pre>";
// print_r($colors);


/*

replace : 

تغير اوتستبدل قيمه جوا الاراي 
مثل : ممكن تستبدل حاجه مش من نوع او جنس الاراي 
مثل : اراي ارقام مع الوان - هتسبدل الارقام بالوان 
عشان يبقي كله الوان 

- ازاي : 
عن طريق override 

ممكن تعمل اوفررايد مرتين عادي 

*/
  
// replace element --index 

// $colors[3] = "black";
// $colors[3] = "yellow"; // override
// $colors[4] =  "orange";
// echo "<pre>";
// print_r($colors);


/*

unset ; 

لو عايز تشيل اي فريبل 
وبتقبل mixed 
يعني اي نوع فريبل حتي لو اراي 
وممكن برده كي ف اراي
مثال :  لو عايز تشيل قيمه مش من جنس الاراي 

// can do both
 unset($colors[3]);
 unset($colors);

 القيمه بتتشال بالاندكس بتاعها  وبمكانها ف الاراي 
 يعني محدش بيحل مكانها 
 وعشان تعمل re-indxe for array element 
 يعني بدل ميبقي في اندكس واقع مكان اللي اتحذف 
 بخلي عنصر تاني يجي مكان العنصر اللي اتحذف ونرجع الاندكس
 ممكن تستخدم array value : 
 This function returns all the values from the array and indexes the array numerically. :
 يعني لو رجعت 5 عناصر برتيبهم من الاندكس 0 ل 4 - يعني بتفهرس العناصر
 وهي اراي call by value
 syntax : new array = array_values[old array ]
  

عشان تشتغل ع اي قيمه من قيم الاراي 
باي عمليه يبقي ب 
index 

*/

########################################################## 

array shift 
#############  

<?php


    /*

      اراي شيفت بتمسح اول عنصر ف الاراي 
      وبترجعه 
      فممكن تحفظه ف متغير لو محتاجه بعد كدا

    */ 

    $numbers = array("15","20","30","40","50");

    $first_element = array_shift($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "\n";
    echo $first_element . "\n";

?>



#####################################################


// remove elment -- unset 

// unset($colors[3]);
// unset($colors[4]);
// echo "<pre>";
// print_r($colors);

<!-- // remove element with index 1 and re-index array
 -->

$xrr = array(
    
  'geeks', // [0]
  'for', // [1]
  'geeks' // [2]

);

// remove item at index 1 which is 'for'
unset($arr[1]); 

// Print modified array
echo "<pre>";
print_r($arr);

// Re-index the array elements
$reindexed_array = array_values($arr); // call by value

// Print re-indexed array
echo "<pre>";
print_r($reindexed_array);

----------------------------------------------

<h1>rand </h1>
##############################

<!-- 
  


ازم تفصل الايكو والراند عن بعض
 rand  here اللي عاوزها : 


PHP rand() Function

The rand() function generates a random integer.

syntax : 

rand();

or

rand(min,max);

parameter : 

min:
	Optional. Specifies the lowest number to return. Default is 0

max:
	Optional. Specifies the highest number to return. Default is getrandmax() : 
Return largest possible random value that can be returned by rand() : تقريبا 10 ارقام


note :

A special character is a character that is not an alphabetic or numeric character. Punctuation marks and other symbols are examples of special characters. Unlike alphanumeric characters, special characters may have multiple uses


char o character : 

alphabetic or numeric character " = alphanumeric "  or symbol "special character "

 -->

################################################

<h1> print_r</h1>

<!-- 

  
PHP print_r() Function


Syntax
print_r(variable, return);


Parameter	Description

variable
	Required. Specifies the variable to return information about 

return
	Optional. When set to true, this function will return the information (not print it). Default is false


Return Value:
	If variable is integer, float, or string, the value itself will be printed. If variable is array or object, this function returns keys and elements. If the return parameter is set to TRUE, this function returns a string


 -->

 <p>

  <?php
$a = array("red", "green", "blue");
print_r($a);

echo "<br>";

$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
print_r($b);
?>
 </p>

 ---------------------------------------------------
 array_rand 
 ##############################

 <!-- 

  يبقي دينمك : اراي واراي راند 

Array - Rand : 

هي بتظبطلك موضوع راند اندكس ، يعني بتجبلك اندكس عشوائي 
وبتريحك من قصه منميم وماكسميم بتاعه ريند 

Definition and Usage ; 

The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.
''يبقي هي بترجعلك  رندم اندكس (كي) او اراي محتواها رندم اندكسز كما موضح بالمثال"

Syntax : 

array_rand(array, number)
" نمبر : عدد الاندكسز اللي عايز ترجعها 
ديفولت بتاع نمبر :  واحد  يعني من الاخر لو عايز ترجع رندم اندكس واحد مش هتكتبه 
لكن لو عايز ترجع اراي محتواها رندم اندكسز هتخيلها رقم اكبر من 1  "

number : 
	Optional. Specifies how many random keys to return

  -->

  <!--

      return array of keys from array rand
  if u want just 1 random index - remove number

  -->

$colors = ["red","blue","white","green"];

$random_keys = array_rand($colors,2);
print_r($random_keys);

echo "<br>";

echo $colors[$random_keys[0]] . "<br>";
echo $colors[$random_keys[1]];

----------------------------------------------

in_array
##########  

<?php

    /*

        searches an array for a specific value.

        in_array(search, array)

  

    */

    $colors = ["red","blue","white","black","yellow"];

    echo in_array("red",$colors);


?>

------------------------------------------------------------
 array_merge 
 --------------

 <?php

    /*

        merges one or more arrays into one array.

        array_merge(array1, array2, array3, ...)

        note : 
       $x1=array("a"=>"red","b"=>"green");
       $x2=array("c"=>"blue","b"=>"yellow"); // b will be yellow not green    

   */

   $x1=array("red","green");
   $x2=array("blue","yellow");

    echo "<pre>";
    print_r(array_merge($a1,$a2));

?>

--------------------------------------------------------------

array_pop
---------------  

// array_pop :

/*

   deletes the last element of an array.

   array_pop(array)

   Returns the last value of array :
   يعني لو عملت ايكو هترجعلك العنصر اللي حذفته

*/

array_pop($colors);
echo "<pre>";
print_r($colors);


 practice on array
###################################
  

// practice 1 : join 2 array in 1 [5 methods]


// $old_colors = ["red","green","blue"];
// $new_colors = ["white","black"];

// 1&2 - PUSH elements in array with and without index

// $old_colors[3] = "white"; //can be [] without index
// $old_colors[4] = "black"; //can be [] without index
// echo "<pre>";
// print_r($old_colors);

// note : postincreament operator : ++ 

// $i = 1;
// $i++; // = $i = $i + 1;  - override - postincreament  
// $i++;
// echo $i; // 3

// replace index with function - to be dynamic

//$i = count($old_colors);
// $old_colors[$i] = "white"; //3 : لو العدد زاد 
الكونت هيزيد -وبكده تبقي دينمك 
// $old_colors[$i] = "black"; //4

// post increment method : 

/*

اول خطوه ف اي اسكريب ت fire - الاسكريبت او تجربه 
بانك تكتب كود وتشوفه 

ممكن تستبدل رقم او اندكس ب فانكشن :
عشان تخلي الموضوع دينمك 
هتستبدل اااندكس بفانكشن كونت مثلا
فلو العدد زاد الكونت هيزيد 
فالنتايج هتتغير اتومتيكيا او دينمكلي 

() = of 

post increment or  post echo or return :
بيطبع الاول او بيرتيرن ثم يزود 
يعني من الاخر اول واحده الرقم زي ماهو والزياده من التانيه 


pre increment or  pre echo or return :

 بيزود الاول ثم يطبع  او بيرتيرن

يعني من الاخرالزياده بتبدا من اول رقم طبيعي 

من الاخر : البوست الزياده من التانيه 
البري طبيعي الزياده من الاولي 

*/

// $i = 3;

// $old_colors[$i++] = "white";
// $old_colors[$i++] = "black";

//echo $i;

//preincrement method : 

// $i = 2;

// $old_colors[++$i] = "white";
// $old_colors[++$i] = "black";

// echo $i;

// echo "<pre>";
// print_r($old_colors);


<!-- // practice 2 : add 3 element in the middle  -->

<!-- 

  فكره الاسيمنت : 
ازاي احط 3 عناصر ف النص - واحتفظ بالعناصر اللي كانت ف النص القديمه - بشكل دينمك - ومن غير ميحصل عليهم اوفر رايد 
او لو حصل ابقي محتفظ بيهم 
عشان بعد كده اضفهم تاني وميحصلش مشاكل ف الاراي 

الحل : هضفهم ف متغيرات ولما هحتجهلم - هستدعيهم 

 -->


$colors = ["red","green","blue","white"]; 

$blue = $colors[2];
$white = $colors[3];
$i = 2;
$colors[$i++] = "orange";
$colors[$i++] = "black";
$colors[$i++] = "yellow";
$colors[$i++] =$ylue;
$colors[$i++] = $white;

echo "<pre>";
print_r($colors);


<!--  practice 3 : type all elements in h3 dynamically  -->
    <!--  and remove last element dynamically   -->

    /*

    dynamically : 
    لازم تعود نفسك تكتب الكود دينمك 
    يعني ميبقاش ثابت ع حاجه معينه 
    او تحتاج تعدل فيه او تغير فيه 
    يعني مدخلش متغيرات بايدي مثل الاندكس 
    كل حاجه تبقي تومتايكي 
    مثال : 
     $colors[ ] 
    وتحط اندكس اللي  يعتبر متغير 
    وعشان يبقي دينمك يعني يتنفذ من غير مااقول اندكس رقم كام
    استبدل الاندكس : 
    بفانكشن مثلا او لوب او $i و انكريمنت
    فمثلا لو عايز اشيل اخر عنصر ف الاراي 
    بستبدل الاندكس بكونت - 1 
    بحيث لو الاراي بقيت 1000 عنصر او تغيرت 
    برده هيتحذف اخر عنصر وهتتاقلم مع التغير بدون تدخلك
    او مثلا بعمل بيلت ان فانكشن دينمك 
    مثل : اراي بوب  : بتشيل اخر عنصر اتوماتيك
    وحاول دايما تخلي الاندكس او اي  حاجه متغيره دينمك 
    
    - بري وبوست انكريمنت لو هطبع اراي كامله 
    مش مجرد بدمج 2 اراي او بضيف عناصر ع الاراي : للفهم انظر المثال
    بري : 
    اول عنصر : $I حيث :$I = 0 
    ثم الباقي : ++$I 

    بوست : 
    اول عنصر لغايه الباقي : 
    $I++ : لانه بيضيف من المره التانيه 
    عشان اختلافات الجمع والطباعه 
    
    - array pop : لازاله اخر عنصر ف الاراي تومتايكي
    
    - لو هتعوض مكان الاندكس بفانكشن 
    حط الفانكشن جوا فريبل واتعامل بيه 
    هيبقي احسن ف التنظيم والقراءه 
    والاداء لاني هاخد نتيجه علطول مش محتاج انفذه كل مره
    مثال :  // $i = count($colors)-1;
    
    - فتحه اقواس بي اتش بي - افتح برجل " كيبورد"
    
    دايما last element = count -1 
    


    */

     <!-- in h3 dynamically -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 </head>
 <body>

    <?php

      //$colors = ["red","green","blue","white","orange" ,"black","yellow"]; 
      
      //$i = 0;

    ?>

    <!-- with pre increment  -->
    <!-- 
    <h3><?//php echo $colors[$i]; ?></h3>
    <h3><?//php echo $colors[++$i]; ?></h3>
    <h3><?//php echo $colors[++$i]; ?></h3>
    <h3><?//php echo $colors[++$i]; ?></h3>
    <h3><?//php echo $colors[++$i]; ?></h3>
    <h3><?//php echo $colors[++$i]; ?></h3>
    <h3><?//php echo $colors[++$i]; ?></h3> 
    -->

    <!-- with post increment  -->
    <h3><?//php echo $colors[$i++]; ?></h3>
    <h3><?//php echo $colors[$i++]; ?></h3>
    <h3><?//php echo $colors[$i++]; ?></h3>
    <h3><?//php echo $colors[$i++]; ?></h3>
    <h3><?//php echo $colors[$i++]; ?></h3>
    <h3><?//php echo $colors[$i++]; ?></h3>
    <h3><?//php echo $colors[$i++]; ?></h3>
   
  
 <!-- </body>
 </html>



//$colors = ["red","green","blue","white","orange",  "black","yellow"];

  // remove last element dynamocally with unset

  // $i = count($colors)-1;
  // unset($colors[$i]);

  // echo "<pre>";
  // print_r($colors);

  // remove last element dynamocally with array pop:

  // array_pop($colors);

  // echo "<pre>";
  // print_r($colors);


  // PRACTICE :  reverse the array and made page in bootstrap:


   <!-- 

  bbadge = notification icon 

- array reverse (array) :

 لعكس عناصر الاراي 
يعني الاول هيبقي اخير والعكس 
وهي اراي call by value : 
يعني من الاخر خليها قيمه لمتغير او حطها في متغير 
وهو ده الاراي الجديده وده اللي هتعمله برنت ار 

- ملحوظه  : 
call by referance 
هو الطبيعي بتاع الفانكشن او التقليدي 
يعني من الاخر بيتنفذ علطول من غير متحطها ف متغير 
والعكس call by value

- يبقي كله طبيعي او تقليدي array by referans 
والعكس call by value مثل : 
array reverse 
"معكوسه علينا"

  -->
  

  $colors = ["red","green","blue","white","orange",
  "black","yellow"];
  $i = 6;

  // manually

  // $colors[$i--] = "red";
  // $colors[$i--] = "green";
  // $colors[$i--] = "blue";
  // $colors[$i--] = "white";
  // $colors[$i--] = "orange";
  // $colors[$i--] = "black";
  // $colors[$i--] = "yellow";

  //  echo "<pre>";
  // print_r($colors);

  // built in function - automatic: 

 $reversed_array = array_reverse($colors);


  echo "<pre>";
  print_r($reversed_array);

 
<!-- count of elements in badge of bootstrap -->

 <!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> bootstap demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1> Hello World! </h1>
    <?php
    
      //$colors = ["red","green","blue","white","orange","black","yellow"]; 

    ?>
    <button type="button" class="btn btn-primary position-relative">
          Inbox
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
             <?php // echo count($colors); ?>+ 
             
          - note :  pre : 99+ 
             ممكن تفتح تاج بي اتش بي ف احته وبدل اي حاجه  -->
             <span class="visually-hidden">unread messages</span>
            </span>
      </button>
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
  </html> --> -->

  
  <!-- echo elements of array in ul-li dynamically -->
  
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> bootstap demo </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
      <h1> colors </h1>
      <?php
         
        $colors = ["red","green","blue","white","orange","black","yellow"];
        $i = 0;
  
      ?>
  
      <ul>
        <li><?php echo $colors[$i++]; ?></li>
        <li><?php echo $colors[$i++]; ?></li>
        <li><?php echo $colors[$i++]; ?></li>
        <li><?php echo $colors[$i++]; ?></li>
        <li><?php echo $colors[$i++]; ?></li>
        <li><?php echo $colors[$i++]; ?></li>
        <li><?php echo $colors[$i++]; ?></li>
      </ul>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
  </html>

  

  <!-- practice :  get total price of array  -->
 
  /*

  لازم تتعلم تدريجي - وتجرب تعمل عمل بيلت ان فانكشن
manualo وبدماغك وبالطريقه التقليديه او العقيمه 
ثم تتطور للبيلت ان فانكشن 
وده هيخليك تفهم عمل الفانكشن اكتر وايه اللي بيحصل ف الباك جرواند 
وتفهم اللغه اكتر 
وتزود لوجيك اكتر 
مثل اراي sum والطريقه العقيمه للجمع 

لو عاوز تتعلم برمجه صح عود نفسك تعمل اي بيلت ان فانكشن 
منيول او بالطريقه التقليديه او من غير الفانكشن البيلت ان 

ف السغل الحقيقي هتحتك بالوتستراب كتير فلازم يبقي عندك فكره عنه - مش تتقنها 

كل اكسبريشن بيحتاج ايكو واحده مش ايكو لكل سطر
حتي لو كذا سطر زي عمليه جمع طويله 

array_sum[$array]

  */


  $total_price = [11,20,66,44,100,70,80];
   
  // manual or tradtional way :

  $i = 0;
  echo $total_price[$i++] + //or0
       $total_price[$i++] +//1
       $total_price[$i++] +
       $total_price[$i++] +
       $total_price[$i++] +
       $total_price[$i++] +
       $total_price[$i++];
       
  echo "<br>"; 


 // built in function - dynamic :

 echo array_sum($total_price);
  
  echo "<pre>";
  print_r($total_price);


  <!--  practice  : هات 3 عناصر من الاراي عشوائي ودينمك ومن غير متعرف اولها واخرها  -->

/*

rand (minmum number , maximum number)
هي فانكشن عشان اجيب رقم عشوائي بين رقمين - مطلعش منهم
بس ممكن هم يطلعوا "الرقمين"
rand with array (min index , max index)

- الاراي دايما بدايتها ثابته = 0
ع عكس النهايه ممكن كل شويه تزيد 
فعشان اريح دماغي وابقي دينمك 
خلي النهايه count -1 

- clean code : 
خلي التسميات معبره 

*/
  


  $students = ["mohamed","ahmed","maha","reem","nader","huda"];

  $index = rand(0,count($students)-1);
  // لازم تعمل مع كل عنصر راند مخصوصه 
 // عشان كل زاحده تطلع رقم عشوائي غير التاني 
  echo $students[$index];
  echo "<br>";

  $index = rand(0,count($students)-1);
  echo $students[$index];
  echo "<br>";

  $index = rand(0,count($students)-1);
  echo $students[$index];
  echo "<br>";

 
 ?>

 <!-- push in empty array -->
<!-- Make a new array with these items plus 5 -->


 $numbers = [10, 20, 30, 40, 50];

 $i = 0;

 $new_numbers = [];
 $new_numbers[] = $numbers[$i++] + 5;
 $new_numbers[] = $numbers[$i++] + 5;
 $new_numbers[] = $numbers[$i++] + 5;
 $new_numbers[] = $numbers[$i++] + 5;
 $new_numbers[] = $numbers[$i++] + 5;

 <!-- 
  
  ملاحظات متنوعه : 
  تاج php : لو حاجه php فقط 
تاج html : اكتب جواها php اللي فيه ميكس مع html 

لو هتطبع كذا امر لنفس  الاراي خليك اندكس 0-1 : 
لانك لو عملت $i هيكمل ع اللي فات وهيعملك ايرور 


في اي طباعه لاراي يعني الامر هيتعاد 
ظبط واحده واعملها كوبي متقعدش تعمل كل واحده لوحدها 

جوا " " : ممكن تعمل 1 سبيس اونلي



  -->








  





---------------------------------------------------

         2-    string
################################
################################
################################


<h1>what is string </h1>

<!-- 

  string : 

داتا تيب مهم جدا 

هناك طريقتين لكتابه االاسترينج وظهرلهم بدائل بسبب المشاكل اللي فيهم :  " " و ' '

هو سلسله من الحروف بشرط تبقي بين سنجل او دوبل كوتشين 
chain of character 

دوبل كوتشين بيستخدم اكتر بكتير من سنجل كوتيشن 
لان فيها مرونه ف حاجتين مهمين  : 

1 - فريبلز : 
 لو عايز اطبع فريبل جوا سترنج - وهو بيتعمل  بارسينج PARSING
لدوبل كوتشين - بيتجاب قيمه الفريبل وبتطبع
ع  عكس السنجل كوتشين هيتطبع زي ماهو فريبل كانه سترينج مكتوب جوا وخلاص 
مش هيتعمله بارسينج او يروح يجيب قيممته ويطبعها 

2- سكيب سكونس skip squance : 

يعني من الاخر لو عندي اي حاجه هتعطل الاسترنج في الطباعه مثل : دوبل كوتشين جوا دوبل كوتشين 
بعملها سكيب سكوينس
فكاني بقله دي تبع الطباعه وليس تبع قواعد اللغه

تفصيل : 
لو عايز اطبع دوبل كوتشين  جوا دبل كوتشين - وانا عندي الاسترنج لازم يبدا بدوبل كوتشين 
وينتهي بدوبل كوتشين - اعمل ايه ؟ 
 لو كتبت دوبل كوتشين :  هيديك سنتاكس ايرور 
ولكن لو استخدكت باك  سلاش \  " زرار فوق الانتر "هيطبعلي سنجل كوتيشن 
وكاني بقوله دي تبقي عادي عديها وكانها واسطه 
 
ملاحظه : ممكن تطبع الدوبل كوتيشن بانك تستخدم 
سنجل كوتشيشن مع الاسترينج - غير مستخدمه

 -->

<p>
  $name = "Abdo Hasen"; // chain of character
   inside "" or ''

    //echo 'name is $name ';
   // echo 'name " is $name '; // variable
    echo "name \" is $name "; // skip squance
</p>

<hr>

<h1>concatenation</h1>

<!-- 

مشكله : استرنج جنب استرنج ؟ 

Operator.. 2 opreands يمين وشمال 
Conctnation(.) : 
لصق،  لزق ..،جمع 
بلزق جزء مع جزء  تاني 

مشكله : html كاملا جوا دويبل كوتشين : 
مثل لينك : ف سنجل ودوبل كوتشين كتير،  هقعد بقي اغيره ف كل جزء واعمل كونكتنيت !!

Note :  Symbol Is character .. 

  
 -->

 <p>

  $name = "ali";

  echo "first  $name last";
  echo "first " , $name , " last";
  <!-- concatenation : Operator.. 2 opreands يمين وشمال  -->
  echo "first " . $name . " last"; 

 </p>

 <hr>

<h1>Heredoc & nowdoc</h1>

<!-- 

دلوقتي لو عندي كود html 
كبير  مليان لينكس او دبل كوتشينز جوا سنجل كوتشينز 
وهكذا  عايز اطبعه 
فاكيد مش هقعد اعمل سكيب سكوينس ورا الكود كله 
فلذلك عملوا heredoc & nowdoc 


Heredoc =  دوبل كوتيشن 
Nowdoc = سنجل 

نودوك : مبيعملش بارسينج للفريبل زي سنجل كوتيشن 

سينتاكس : 3 اصغر من 
ثم اي كلمه كابيتل معبره 
ثم انزل سطر واكتب كودك 
ثم خد الكلمه الكابيتل كوبي وحط سيمي كولون 
والفرق بين هير دوك و نودوك
هيردوك بكتب الكلمه الكابيتل من غير حاحه 
نودوك بكتب الكلمه الكابيتل بين سنجل كوتشين 



تفاصيل : 
مشكله : html كاملا جوا دويبل كوتشين : 
مثل لينك : ف سنجل ودوبل كوتشين كتير،  هقعد بقي اغيره ف كل جزء واعمل كونكتنيت !!
حل : 
Heredoc & nowdoc : 
بيريحك. من صداع كوتشينز 
وفربيل بيتعمله باوسينج لو جوا heredoc
Special char ex % 
واي اكواد html براحتك من غير كوتشينز
وهيطبعلك فورورد سلاش ك \(سكيب سكوينس) ويطبعلك كوتشينز
ازاي  : ستايل معين للكود 
<<<TYPE' or TYPE' : اي كلمه معبره كابيتل او بين سنجل كوتشين"انزل سطر - لازم"
كود "انزل سطر- لازم"
نفس الكلمه ; 

 -->

 <p>

  $name = "ali";

  $link = <<<TYPE
  'Hello $name\nGoodbye!'
  $%^&*
  <br>
  ali
  <hr>
  nor
  \" 
  TYPE;

  echo $link;

 </p>

 <hr>


 <h1> String function</h1>

 ################################################

 <!-- 

String function : 

(m) : for mandatory

انت بيجيلك الاسترنج متعرفش طوله قد ايه 
فانت مثلا بتستقبل نيم بتاع يوزر من فورم 
فمثلا منتظر مينفعش يزيد عن 20 حرف
لو جاللك 1000 حرف ده مش منطقي 
فلازم تعمل Validation ع استرنج قبل ميجلك 
من يوزر "هاك او استهبال "

Strlen string 

Limit : 
عايز اخد جزء  من استرنج،  حته منه ، لقطع او تقسيم الاسترنج 
بتلاقيها ف مواقع كتير عارض حته والباقي نقط 

Substr... 2 mandatory.. 1 optional (يعني بياخد قيمه ديفولت )
String... Offset (index)...length (optional )

Offset : عايز تبتدي تقطع منين او البدايه 
اتش بي بتتعامل مع الاسنرنج كانه اراي 
تنطق اس تي ار 

Lenghth : 
عايز تقطع اد ايه ، او لغايه فين او نهايه 
دفولت : لاخر الاسترنج 

واللينث بيبدا اول حرف من رقم واحد وليس صفر 

مسافه بتتحسب ف اللينث 
Br : بتتحسبش بس الكومبيلر بينفذها مش بتطبع بس لو اخد جزء منها هيطبعها كسترنج عادي 

اللينث بيبدا معايا من اول الاندكس
يبقي لو من 0 ل 10 ، يبقي 10 حروف بدايه من 0 ، يعني 0 محسوب معايا ف 10 

اللينث لما بتبقي بالسالب يعني نقص،  فمثلا -2 ، يبقي نقصلي او شيلي حرفين من الاخر


Replace : 
لو عايز اريبلاس كلمه او حرفف جوا الاسترنج بكلمه تانيه او حرف
Str_replace : search,  replace,  subject 
Search : الكلمهواللي هتدور عليها عشان تبدلها 
Replace :  هتغير بايه 
Subject : الحاجه اللي انت بتسرش جواها.. String
النعظم. بيبدا بالاسنرنج ف الاول ماعدا replacen

ملاحظه : تيكست من غير دوبا كوتس بيتعامل معامله كونستينت 

Find : 
من الاخر : عايز اعرف موقع كلمه معينه،  او ابره ف كومه قش
عايز تعرف ف كلمه موجوده ولا 
او تلاقي كلمه. معينه 
وتعوف موقعها 


Strpos : $haystack,  needle , offset (optional)
Php 8 : str_contain
haystack :  الحاجه اللي هتسرش جواها.. String
needle : هتسرش ع ايخ - case sensitive
offset : عاوز تسرش منين 
 ابره ف كومه قش 
من الاخر : (يعني هدور ع ايه )
"لان كله بتبدا بالاسترنج "


فمثلا لو بسرش ع الكلمه من الاوفست بتاع تاني حرف للكلمه هيقولي مفيش ، لازم اوفست اول حرف 

النتيجه هتبقي الاوفست بتاع اول حرف ف الكلمه لو موجوده 
ولو مش موجوده هيديك فولس او فاضي او null " مش صفر"

لو الكلمه اللي بدور عليها موجوده مرتين هيجبلي اول واحده 

u have stripos  : i for insensitive 


Upper : عشان تحول كل الحروف اللي عندك 
To UPPER case 
Strtoupper :  string 
عكسها lower... Strtolower 


Word count : 
لمعوفه عدد الكلمات جوا الاسترنج 
تاج br اتحسب كلمه معايا 
ع عكس length عدد الحروف 
بيعد : حروف مثل a ،  تاجات html مثلا 
مش بيعد : ارقام،  & 



Repeat : 
لتكرار الاسترنج عدد معين من المرات 
Str_repeat : string ,  times 


Shuffle : 
ادخب الاسترنج ف بعضه حروف ف كلمات ولغبط،  يبقي متلغبط ، وبيشفل زي الكوتشينه،  دينمك. مع كل ريلود 
يعني هي بتطلعلي كلمات عشوائيه او رندم وردز فبتلغبط ترتيب الكلمه نفسها في كل مره ريلود 
Str_shuffle : string 


Reverse : 
لبعكس جملهوالاسترنج وكل كلمه فيه 
لو كلمه هعكس حروفها 
Vs. Shuffle : واحده بتعكس والتانيه بتلغبط
Strrev : string 
ملاحظه 

Empty : 
نقدر نستخدمها مع الاسترنج والاراي 
بتشوف الاسترنج بتاعك فاضي ولا في كلام 
Yes or no 
وبترجع ترو ب 1 لو فاضي ، فولس فاضي لو مليان

هل كل فانكشن الاسترنج فيها ايكو؟  حاليا اه


معظم الفانكشن بتبدا  الاسترنج ماعدا : 
Replace :  هتبدل ايه بايه  ف ايه 
explode : هتقطع منين وفين ولفين 



الكل بيكتب عادي ماعدا : 
Str_replace 
Str_word_count 
Str_repeat
Str_shuffle
تلخيصه :
هويبلاس ورد كوينت،  وهربيت الشفل 
ه replace.. ال word count ..وه repeat ..ال shuffle 


All function : 

هناك مئات الفانكشن للاسترنج واي حاجه تانيه عموما
 بس حقيقه انت مش محتاجها دلوقتي،  لكن وقت متقابلك مشكله مع الاسترنج  ، سرش ازاي php بتحل مشكله دي 
وغالبا واتت بتتعلم او ف اول سنه،  انت مش محتاج تعمل فانكشن ع الاسترنج،  php بتقدملك بيلت ان فانكشن بتحللك معظم مشاكلك 
لانك يعتبر موجود ف بيئه مطورين ، احتكوا بكل اللي مشاكل اللي انت احتكيت بيها وهتحتك بيها ووجدوا حلول ليها


PHP strcmp() Function : 
Compare two strings (case-sensitive):

strcmp(string1,string2)

Return Value:	This function returns:
0 - if the two strings are equal
<0 - if string1 is less than string2
>0 - if string1 is greater than string2

اوجه مقارنه : 
كابيتل و سمول 
عدد كلمات اكتر 
الترتيب ف الابجديه : 
a > e


PHP chunk_split() Function : 

The chunk_split() function splits a string into a series of smaller parts.

This function does not alter the original string

chunk_split(string,length,end)
طول ونهايه التشانك 

string :	Required. Specifies the string to split
length :	Optional. A number that defines the length of the chunks. Default is 76
end : 	Optional. A string that defines what to place at the end of each chunk. Default is \r\n

اي حاجه optional ليها قيمه default 

/r/n = space - مسطره 

سبيس بيتحسب حرف


------------------------------------------------------

PHP explode() Function :


Explode : 

عكس امبلود 
بياخد منك استرنج والعناصر اللي فيه ويرجعهالك جوا اراي 


syntax : seperator, string , limit(op)

السبرتور هو الحاجه اللي بفصل بيها بين عنصر واخر 

غالبا يكون السبريتور مسافه

السبرتور اجباري *وده منطقي جدا ، لان الاراي فيه كوما بتفصل بين العناصر وده اجباري ، ع عكس الاسترنج *


ممكن السبريتور يبقي حرف ،  واللي بفصل بيه مبحطهوش ف الاراي بتاعتي او مبستخدمهوش 
واللي قبليه عنصر واللي بعده عنصر 


Limit  in explode : 

عدد العناصر بتاعه الاراي اللي عايز ترجعها : 

لو 0-1 : هيرجعلك الاسترنج كله ف عنصر واحد او one element ، و 0 عشان الاندكس بيبدا بزيرو 

الليمت 2 : يبقي عايز عنصرين ف الاراي بتاعتي 
طب هيفصل ازاي؟
  
بالفصله،  يعني لو مسافه عندي سبريتور 
اللي قبليها عيبقي العنصر الاول
واللي بعديها هو التاني 

ممكن الليمت يبقي نيجتف فاليوز.. Negative values :
 
مثلا -2 : يعني رجع الاراي عادي وشيل اخر عنصرين 


ملحوظه جانبيه : 

  $str = "one,two,three,four";  // one string without conctnation : 
  الاسترنج هو تشان اوف كاركتيرز بين " " ولذلك ممكن احط براحتي اي حاجه جوا "" 


  code 
  ----------

// explode

 $str = "Elzero Web School Is Cool";

 echo "<pre>";
 print_r(explode(" ",$str));

 echo "<pre>";
 print_r(explode(" ",$str,0)); // 0-1 same result

 echo "<pre>";
 print_r(explode(" ",$str,3));

 echo "<pre>";
 print_r(explode(" ",$str,-3));


---------------------------------------------------------------------------


PHP str_split() Function : 

The str_split() function splits a string into an array.


str_split(string (m) ,length)


Parameter	
string :
	Required. Specifies the string to split
length :
	Optional. Specifies the length of each array element. Default is 1 : 
  يعني عاوز اللينث  او عدد الحروف بتاع كل عنصر ف الاراي اد ايه ؟

  مثال تحت

---------------------------------------------------------------------------




PHP implode() Function ; 


Implode : 

Implode.... Alias name : join  : 

ت جوين... Join عناصر الاراي كلها ف سترنج واحد ، وكمان تحدد الفاصل اللي بينهم 

السبريتور او الفاصل اختياري 
يعني عايز الاسترنج اللي هيرجعلك يبقي الفاصله بين العناصر ايه 
من غير سبيرتور بيلزق عناصر الاراي ف بعض "ديفولت"

السبرتور ممكن يكون : سبيس ،  كوما ، ممكن حاجتين مع بعض،  سبيشل كراكتير مثل && 
يعني ممكن تفصل باي عنصر يعجبك 


Join array elements with a string

Note: The separator parameter of implode() is optional. However, it is recommended to always use two parameters for backwards compatibility.

implode(separator(op),array)

Parameter :
separator	Optional. Specifies what to put between the array elements. Default is "" (an empty string)
array	Required. The array to join to a string



CODE 
#########

// implode - join

 $friends = ["Ahmed", "Osama", "Ali", "Salem"];

 echo implode(" ",$friends)  . "<br>";
 echo implode(", ",$friends) . "<br>";
 echo implode("&&",$friends) . "<br>";
 echo implode($friends)      . "<br>";



  -->

<p>

  
  $text = "we are learning string in PHP  course with eraasoft <br>";

  //length : strlen = $string "argument"
  //echo strlen($text);


  //limit : substr = $string , $offset(index) , length(optional)
  //echo substr($text,2,4);
  //echo $text[3];

  
  // replace : str_replace = search"word" , replace , subject "string"
  //echo str_replace("eraasoft","abdosoft",$text);


  // find : strpos = hatstack "string" , needle "word" , offser (optional)
  //echo strpos($text,"are",3);

  // upper : strtoupper = STRING
  //echo strtoupper($text);

  //lower : strtolower = STRING
  //echo strtolower($text);

  //word count : str_word_count = string
  //echo str_word_count($text)

  //repeat : str_repeat = string,times
  //echo str_repeat($text,10)

  //shuffle : str_shuffle = string
  //echo str_shuffle($text);

  //reverse : strrev = string
  //echo strrev($text);

  //empty = string
  //echo empty($text);

 // strcmp(string1,string2)
  echo strcmp("Hello world!","Hello world!"); // the two strings are equal
  echo strcmp("Hello world!","Hello"); // string1 is greater than string2
  echo strcmp("Hello world!","Hello world! Hello!"); // string1 is less than string2

  <!-- 
     PHP chunk_split() Function : 
    chunk_split(string(m),length,end)
   -->
  $str = "Hello world!";
  echo chunk_split($str,6,"...");

<!-- 
  str_split(string,length)
 -->

  print_r(str_split("Hello",3));



</p>


<h1>practice on string</h1>

################################################

str_split practice 
###################################

<!-- 

لو عايز تقسم سترنج لاجزاء شبه متساويه او متساويه ،  استخدم strsplit 

وانت بتعمل اللينث : هتقسم اللينث بتاع الاسترنج علي عدد الاجزاء وليكن 3 وهتستخدك نمبر فانكشن مثل : سيل وفلور للتقريب "مش هسحل نفسي بكسور ف حروف "
  
 -->

 $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
 repellendus nihil hic totam! Sunt error porro? voluptas nihil iure culpa vitae. 
 Sint ducimus facilis accusantium molestias nam numquam voluptatem eum nemo 
 tempore! Ipsam vitae natus suscipit inventor?e delectus voluptatum amet illo 
 pariatur voluptas fuga harum possimus error magnam nulla, perferendis ipsum quia 
 id laboriosam quam optio dolorum tenetur? Blanditiis praesentium repellendus, 
 asperiores temporibus nobis ipsa officia deleniti fugiat minus doloribus? Ipsum 
 aspernatur in quae maiores nemo dolorum distinctio ea qui enim. Voluptas 
 perferendis voluptatibus, corporis accusantium sunt obcaecati, aut iure maiores, 
 quam reiciendis quibusdam? Placeat excepturi exercitationem enim explicabo.
 Sequi!";

// split it into 3 parts 

$length = ceil(strlen($string) / 3); // 267
$split_string = str_split($string,$length);

$split_string1 = $split_string[0];
$split_string2 = $split_string[1];
$split_string3 = $split_string[2];

echo $split_string1 . "<hr>";
echo $split_string2 . "<hr>";
echo $split_string3 . "<hr>";

-------------------------------------------------


<h1>
  make a bootstrap alert Contain length of chars for string 
</h1>
################################################


<p>


  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> bootstap demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1> bootstrap alert </h1>

    <?php

         $text = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, non labore totam distinctio aspernatur voluptas neque, provident autem alias impedit ex laborum perferendis amet accusantium, dolorem nam. Quod, at quisquam?";

    ?>

   <div id="liveAlertPlaceholder"></div>
   <button type="button" class="btn btn-primary" id="liveAlertBtn"> number of chars : <?php  echo strlen($text);
    ?></button>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

</p>

<hr>


<h2> 
  Practice 2 : 
  Take a random part of text  dynamic and get length of it 
  </h2>


  <!-- 

Practice 2 : 
Take a random part of text  dynamic and get length of it 

فكر ف المشكله براحه وقسمها وخد جزء  جزء  

واتا بكتب فانكشن لو هستخدمها بعد كده مع فانكشن تاتيه حطها جوا متغير باسم معبر 
يبقي من الاخر اي حاجه هتستعملها ف حاجه بعد كده 
حطها ف متغير باسم معبر 

التسميه ف المتغير لو كذا جزء حط _ بينهم

يبقي اتت بتتعلم اجزاء  من puzzels 
وف الاخر بتجمعهم مع بعض عشان تحل مشكله 
او تطلع ابليكاشن 

يبقي Rand مع substr  ف التقطيع : 
خد رقم صغير شويه مثلا من 0 ل 30 
 
   -->


   <p>


    $text = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, non labore totam distinctio aspernatur voluptas neque, provident autem alias impedit ex laborum perferendis amet accusantium, dolorem nam. Quod, at quisquam?";



    $rand = rand(0,30);
    $part_of_string = substr($text,$rand);
    echo $part_of_string . "<br>";
    echo strlen($part_of_string);

   </p>

<hr>


<h1>
Practice 3 : 
Replace lorem with eraasoft 
Then find or search about elite in new string 
</h1>

<!-- 

  Practice 3 : 
Replace lorem with eraasoft 
Then find or search about elite in new string 

Str_replace : 
سيرش فيها او الحاجه اللي هتبدلها بتبقي case sensitive يعني لازم تكتب زي مهي بالظبط سمول او كابيتل 
فالحل : اعمل كوبي احسن 

Strpos : 
وانت بتحدد needle او الابره في  haystack او كومه القش او بتسيرش ع كلمه عشان تحدد موجود ولا وتحدد موقعها لو فيها نقطه او كوما عادي مش لازم تتحط 
لكن لو حطيت مةلاا بدل كوما نقطه،  هيديك 
0 او فاضي او null او مش موجود 

 -->


 <p>
  $text = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, non labore totam distinctio aspernatur voluptas neque, provident autem alias impedit ex laborum perferendis amet accusantium, dolorem nam. Quod, at quisquam?";



  $new_string = str_replace("Lorem","eraasoft",$text);
  
  echo strpos($new_string,"Pariatur,");
 </p>

 <hr>

 <h1>How many eraasoft repeated in string?  
</h1>
################################################

<!-- 

  Str- replace : 
count	: Optional. A variable that counts the number of replacements

How many eraasoft repeated in string?  

بتفكر ف حل المشكله وتعمل الالجورزم اللي هتشتغل ع اساسه او خطوات حل المشكله 

ممكن اعمل replace بمفيش او فاضي اللي هو "" دوبل كوتشين فبكده يبقي عملت remove 


 -->

 <p>

  $text = "Lorem, ipsum dolor eraasoft sit amet consectetur eraasoft adipisicing elit. Pariatur, non labore totam distinctio eraasoft aspernatur voluptas neque, provident autem eraasoft alias impedit ex laborum perferendis amet accusantium, dolorem eraasoft nam. Quod, at quisquam?";

   // short answer 
    echo str_replace("eraasoft","here",$text,$i) . "<br>";
    echo $i; 

   //long answer : 
   // length of string = length_one
   $length_one = strlen($text);
   // length of eraasoft
   $eraasoft_length = strlen("eraasoft");
   // replace = new_string
   $new_string = str_replace("eraasoft","",$text);
   // length after removing eraasoft = length_two
   $length_two = strlen($new_string);
   //string one - string 2 = result
   $result = $length_one - $length_two;
   // result / length of eraasoft = eraasoft frequency 
   $repeat = $result / $eraasoft_length;
   echo $repeat;
 </p>

 <h1>

    //Split this string to 3 parts and put all parts in variables
 </h1>

 <!-- 
     rand for every substr - شوف المثال 
     خلي الراند تبقي رقم صغير مثلا من 0 ل 30 

     لو عايز 50 حرف فقط او رقم معين من الحروف 
     لاتستخدم راند 
  -->

  <p>

    $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis repellendus nihil hic totam! Sunt error porro? voluptas nihil iure culpa vitae. Sint ducimus facilis accusantium molestias nam numquam voluptatem eum nemo tempore! Ipsam vitae natus suscipit inventor?e delectus voluptatum amet illo pariatur voluptas fuga harum possimus error magnam nulla, perferendis ipsum quia id laboriosam quam optio dolorum tenetur? Blanditiis praesentium repellendus, asperiores temporibus nobis ipsa officia deleniti fugiat minus doloribus? Ipsum aspernatur in quae maiores nemo dolorum distinctio ea qui enim. Voluptas perferendis voluptatibus, corporis accusantium sunt obcaecati, aut iure maiores, quam reiciendis quibusdam? Placeat excepturi exercitationem enim explicabo. Sequi!";

    //Get length of this string and print this length in h3 : 

    //Split this string to 3 parts and put all parts in variables
    $rand = rand(0,30);
    $part_one = substr($string,$rand);
    $rand = rand(0,30);
    $part_two = substr($string,$rand);
    $rand = rand(0,30);
    $part_three = substr($string,$rand);
  </p>

  <hr>



  <h1>
    Write a PHP script to split the following string Sample string : '082307'
    Expected Output : 08:23:07
</h1>
###########################################


<?php

    $Sample_string = "082307";

    $part_one   = substr($Sample_string,0,2);
    $part_two   = substr($Sample_string,2,2);
    $part_three = substr($Sample_string,4,6);
    
    echo $part_one . ":" . $part_two . ":" . $part_three;

    <!-- another solution -->

    $expected_string = substr(chunk_split($Sample_string,2,":"),0,-1);
    echo $expected_string;

?>

<h1>
  // Search about function that take random words from string and type result in span
</h1>

<!-- 

  
انت هتفجر الاسترنج لكلمات ب explode " هتفصل بعد المسافه"
ثم هتاخد array of rand - يعني كلمات عشوائيه 


 -->


<p>

  $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis repellendus nihil hic totam! Sunt error porro? voluptas nihil iure culpa vitae. Sint ducimus facilis accusantium molestias nam numquam voluptatem eum nemo tempore! Ipsam vitae natus suscipit inventor?e delectus voluptatum amet illo pariatur voluptas fuga harum possimus error magnam nulla, perferendis ipsum quia id laboriosam quam optio dolorum tenetur? Blanditiis praesentium repellendus, asperiores temporibus nobis ipsa officia deleniti fugiat minus doloribus? Ipsum aspernatur in quae maiores nemo dolorum distinctio ea qui enim. Voluptas perferendis voluptatibus, corporis accusantium sunt obcaecati, aut iure maiores, quam reiciendis quibusdam? Placeat excepturi exercitationem enim explicabo. Sequi!";

  // Search about function that take random words from string and type result in span

  $random_words = explode(" ",$string);
  $result = $random_words[rand(0,count($random_words)-1)];

</p>

          ---------------------------------------------------

     
                   3- operators
          ################################
          ################################
          ################################

          <h1>Precedence </h1>
          ###################################

          <!-- 
            
operator Precedence : 
الاولويه او الترتيب 
Ex : 
multiplication operator Has higher precedence 
But
Addition operator has lower precedence
                                                                                  

لازم تبقي عارف الاساسيات الوياضيه دي زي الاولويه 
عشان لما تيجي تعمل عمليه حسابيه،  يبقي توقعك ف محله 
بدل ميحصل logical error يعني ف كتابتك للعمليه الحسابيه 

ترتيب precedence : 
()


Power or الاس 
*/ 
+- 
طب لو الاتنين موجودين ضرب وقسم او طرح وجمع : 
Left to right 

           -->

           <p>

            // 30 / 3 then 5 * 10 then +  
            echo (30 / 3) + (5 * 10); //60 
          
           </p>

-----------------------------------------------------------------------------------------------------------
 Airthmatic operators : 
 ###########################################

 <!-- 

  Operator : 

عباره عن character موجوده عندي ف اللغات ، وهو معرف وموجود ف اللغه،  بيأدي وظيفه معينه 
مهمه جدا وانت بتستخدمها ف كل حاجه حرفيا 

 اوببرنت : حاجه بستخدم لعمل عمليات ع المتغيرات والقيم 



Airthmatic operators : 

العمليات الحسابية الاساسيه او numeric value 

X+ y       x and y : Operant اي معامل 
و x + y ده اكسبريشن

% : 
لو جنب رقم يبقي ف الميه 
لكن لو بين رقمين يبقي باقي القسمه او موديلس modules 
10 % 5 = 0 - لو مفيش باقي قسمه بيطلعلك صفر 
10 % 6 = 4 ... لان اقرب رقم يقبل القسمة ع 6 بدون باقي هو 6 ، يبقي باقي القسمه هو 4 

X % y : 
ده اكسبريشن،  وهو اي معامله بنعملها ف اللغه بتؤول الي قيمه 

** :  
الاس او الباور - 3 **3 ، يعني 3 اس 3 يعني 
3*3*3 = 9 

  -->
<p>

  echo 13 % 6; //1
  echo 12 % 6; //0

  echo 3 ** 3; //2

</p>

-------------------------------------------------
assighment operator : 
###################################

<!-- 

  

اتا بعمل عمليه معينه وب assign العمليه،  او بخزنها ف حاجه مثل متغير 
Ex :   x = x + y ....مختصر.... : 
شيل x اللي قبل يساوي،  ورحل اكس بلس برا - وخلي بلس جنب يساوي  
يعني :  x + = y ....
ولما تشوفها اعكسها،  رحل اللي برا جوا... 

بيحصل override ف المتغيرات  ، سواء القيمهواللي جوا سترنج او رقم بمعني : 
اكس هتساوي 4 ، واكس هتساوي 5 ، لو طبعت اكس هتبقي 5 

 -->

 <p>

  $x = 3; 
  $y = 2;
  $x -= $y; // =  $x = $x - $y;
  echo $x;

 </p>

 ------------------------------------------------------------- 

 assighment  operator shorthand
#####################

<?php

    /*

      بلس ايكول دي شورت هاند 
      او اختصار 
      وبيحصل فيه اوفر رايد 
      يعني اكس القديمه 
      هتساوي اكس الجديده 
      زائد واي

      وده يشمل ايرزمتك اوبريتور كلها

    */ 

    $x = 5;
    $y = 6;

    // echo $x = $x + $y;      // 11

    echo $x += $y;    // 11 
    echo "<br>";
?>

<?php

    /*

      
        .=   :   شورت هاند...  خد اللي ع اليمين حطه ع الشمال 
        وكونكتنيت يعني + او جمع 

        نفس فكره دوت زائد اييزميتك اوبريتور 
         خد اللي ع اليمين حطه ع الشمال  

    */ 

    // $first_name = "Abdo";
    // // $first_name = $first_name . " Hassen";
    // $first_name .= " Hasen";

    // echo $first_name; // Abdo Hasen

    $x = 3;
    $y = 4;
    echo $x += $y; // 7

?>

 ---------------------------------------------------
 <h1>Comparison operator</h1>
 ###########################################

 <!-- 

  
The PHP comparison operators are used to compare two values (number or string)

  == كقيمه 
=== كقيمه ونوع بيانات ...valur & type

اللغه زي مليها فوايد،  ليها. اضرار جانبيه،  بتضرنا نعمل معالجات،  فاللغه loosely Lang ، فلما بتقارن اكس ب واي بتقارن من ناحيه القيمه بس،  عشان هي بتحدد نوع البيانات ، ولذلك عملنا تربل ايكول === 

اسم فريبل ممكن :       n_one... n1 ، لو حروف تكتب معاها ارقام،  لكن لو كتابه.. اكتب معاها 

N1 == n2 :  ده اكسبريشن لانها هتؤول الي قيمه 

ناتج مقارنه.. يترو = 1 ، يفولس او مفيش ، ماعدا سبيس شيب 

غالبا بنستخدم دي ! = ف not equal ..لانها منطقيه اكتر 

ف نوت ايكول بس مفيش نوت اسيمنت لذلك بنستخدم ايكول واحده ! = فدي نوت ايكول،  ! == وزي نوت ادينتيكل 

>= : اكبر من او يساوي،  يعني ترو ف حاله من الاتنين 

الجديد : spaceship : 

بترجع ب 0 ، 1 ، -1 بس بالنسبه ل اكس او اللي ع الشمال 
لو اكس اصغر -1 ، اكبر 1 ، متساويين 0 

من الاخر بتغنيك عن if conditions 



  -->

  <p>

    $n1 = "5";
    $n2 = 5;
    
    //equal 
    //echo $n1 == $n2; // 1 - true
    
    //identical 
    //echo $n1 === $n2; // null - فاضي 
    
    //not identical
    //echo $n1 !== $n2; // 1 - true
    
    // not equal
    // echo $n1 != $n2; // false - null
    
    //spaceship 
    
    $x = 4;
    $y = 4;
    
    echo $x <=> $y; //-1 bec x > y
    

  </p>


  spaceship
############

<?php

    /*

        سبيس شيب هي اختصار ل 3 كونديشن مع بعض 
        بترجع واحد لو اكس اكبر من واي
        و سالب واحد لو اكس اصغر من واي 
        وصفر لو الاتنين متساويين  

    */ 
    


    $x = 5;
    $y = 6;

    echo $x <=> $y; // -1 

?>


  ---------------------------------------------------

  <h1> Logical  operator</h1>
  ###################################

  <!-- 

    
Logical  : 

The PHP logical operators are used to combine conditional statements.
يعني لو ترو اديني 1  -   لو العكس ادين فاضي 

مرتبطه بالمنطق او شويه شروط لوجيك  :   لو اتحققوا هيديني ترو او  1  -   لو العكس هيديني فاضي 
 
 
And vs &&  :     يفضل العلامات،  لانها اقرب للغه الاله

And :      لازم الاتنين ترو -  فلازم ده و ده 


Or:  
3 او 
  ترو لو شرط فيهم. اتحقق - او  ..ممكن ده او ده 
او" الاتنين اتحققوا " 

رمزها : عصيتين.. مكان فوردر سلاش،  انتر،  بالشفت 
Call vertical bar 


Xor : 
2 او  و اكس ع التالته "اللي هو او الاتنين "
ي ده يتحقق،  او ده يتحقق 
لكن مينفعش الاتنين،  ع عكس or 
لو الاتنين اتحققوا عندك. And - or 


!x :

   true if x is not true - 1 operant in logical - يعني العكس
   
اي نوت بتبقي العكس لو هم. ترو هي فولس والعكس 
يعني شوف هي ترو. ولا فولس واعكس "عشان تتوقع الاجابه "

تقييم فولس وترو : 
فولس : لو 0 

فلو الشرط اتحقق.. اوبيرنت هيبقي مبسوط ويرجع ترو والعكس 

   -->

   ---------------------------------------------------------------
   معدل logical : 
   ###########################



   <?php

    /*

        اند تبقي ترو 
        لو اكس و واي ترو 
        كقيمه وكشرط 
        كقيمه يعني مش بتساوي 
        صفر او نل او اووف او فاضي 
        كشرط براحتك 
        اكس او واي عباره عن 
         اكسبرشين لو كل واحد فيهم حقق الشرط او
         يعني يؤول الي قيمه تحققق الشرط
        يبقي ترو 
        مثل خمسه اكبر من اربعه ده ترو
         وممكن حتي لو الشرط فولس 
        يعني ايه ؟ 
        يعني مثلا لو اكس بتساوي فولس 
        و واي بتاوي فولس 
        اعمل كذا يعني ترو"
        يعني تحقق من عدم التحقق او تحقق من عكس الشرط 

        اي ترو او فولس عموما ف اللوجيكل 
        بيبقي كقييمه مفرده 
        او اكسبريشن يؤول الي قيمه 
        مثل : خمسه اكبر من عشره

    */ 

    // تحقق من عدم التحقق 
    $x = "";
    $y = "";

    if($x == false && $y == false){
        echo "true ya basha";
    }

?>

   <?php


    // echo (5 > 3) && (10 > 6);    // true - if x and y true 
    // echo (5 > 3) || (10 < 6);    // true - if x or y or both true
    // اكس اور يعني اكس اتفاق سواء الاتنين ترو او فولس 
    //echo (5 > 3) xor (10 < 6);    // true - if  x or y or but not both true or false
    // echo (5 > 3) xor (10 > 6);   // false - bec both of them true
    $x = "10";
    echo !$x; // false - لانه العكس يعني لو اكس ترو هيرجعلك فولس والعكس صحيح

  ?>

<?php

    // != - !== : comparison / ! : logical
   // comparison & logiacl : true and false

   ?>

  


   ---------------------------------------------------

   <h1>Array operator</h1>

   ##############################

   <!-- 

    
Array : 

The PHP array operators are used to compare arrays.

+  :      union 

   او بيجيب الحاجه اليونيك. - اللي متكررتش،  
   المتكرر مبيتجبش،  بس لازم نفس القيمه بالظبط عشان ميتجبش، يعني بالكي والفاليو بس مش لازم نفس الترتيب 
   
جديد او تركه :  + 

Equal : Same key/ value pairs.. 
مش لازم order او الترتيب 


Identical : Same key/ value pairs
In the same order   And type 

    -->

    <p>
 $x = array("b" => "green" ,"a" => "red", );  
$y = array("a" => "red", "b" => "green");  

print_r($x === $y);

    </p>

    ##############################################################

    معدل : array operator 
    ###########################


    <?php

    /*

       يبقي يونيون ف الاراي بيقارن الانديكسيز ببعضها 
       مش القيم
        وبيشيل المتكرر
        وبياخد الاندكسيز المختلفه
        وده الاتحاد ناخد المميز او المختلف من عندي ع اللي المختلف اللي  عندك
        فمثلا لو عندي اراي فيها اندكسيز من واحد لتلاته 
         واراي تانيه فيها اندكسيز من واحد 
         لسته 
         هيرجعلي اراي من واحد لسته وعيشيل الاندكسيز المكرره
         ف الاراي التانيه
         يعني من واحد لتلاته ف الاراي الاولي
          و من اربعه ل سته ف الاراي التانيه
        
        ايكولتي ف الاراي بيقارن قيم الانديكسيز ببعضها 
        يعني قيمه الاندكس صفر مع الاندكس صفر وهكذا 
        ويقارن من حيث القيمه فقط 
        لكن ادينتيكل من حيث القيمه ونوع البيانات 

        array operator : + / == / === / عكس الايكولتي والايدنتيكل

    */ 

    $x = array("b" => "green" ,"a" => "red", );  
    $y = array("a" => "red", "b" => "green");  

    echo "<pre>";
    print_r($x + $y);

##############################################################


    -------------------------------------------------

    <h1> String operator </h1>

    <!-- 

      
String operator : 

Conctnation : 

لو عايز اضم سترنج ع سترنج 

Abrrivation of assighment operator 
With airthmatic & string operator : 
With string :  Concatenation assighment :   .= 
X .= y  // x = x.y  : 	Appends $y to $x يعني بضم واي ل اكس 
نفس فكره التانيه بتاع ال airthmatic ، خد اللي برا وارميه جوا 
 
     -->

     <p>

      //     // .= conctnation

//    $first_name = "Abdo "; 
//    $last_name = "Hasen";
   
//    echo $first_name .= $last_name;

//    echo "<br>";

//    echo $first_name; // override

     </p>

     ---------------------------------------------------

     <h1>Increment - operator</h1>
     ###################################

     
<!-- 

  
Increment - operator?  

post increment or  post echo :
بيطبع الاول او بيرتيرن ثم يزود 
يعني بينجز حاله عشان بري
يعني من الاخر اول واحده الرقم زي ماهو والزياده من التانيه 


pre increment or  pre echo :
 بيزود الاول ثم يطبع  او بيرتيرن
يعني بيتاخر عشان بوست
يعني من الاخرالزياده بتبدا من اول رقم طبيعي 

من الاخر : البوست الزياده من التانيه 
البري طبيعي الزياده من الاولي 

 -->

 <p>

  $x = 5;

// preincrement
// echo ++$x; //6

// echo "<br>";

// echo $x; //6 - لانك هنا طبعت بس مزودتش 

// //predecrement
// echo --$x; 

// echo "<br>";

// echo $x;

 </p>

 معدل 
 #########

 <?php

    /*

        بوست انكريمنت يعني بيزود بوست ايكو 
        يعني لو جيت طبعت اكس بعد بوست انكريمنت هتلاقيها زادت واحد

       
        بري انكريمنت يعني بيزود بري ايكو 
        يعني لو جيت طبعت اكس بعد بري انكريمنت هتلاقيهازي مهي

        
          من الاخر : البوست الزياده من التانيه 
          البري طبيعي الزياده من الاول
                  

    */ 

    // post increment
    // $x = 3;
    // echo $x++ . "<br>"; // 3
    // echo $x;            // 4

    // pre increment
    $x = 3;
    echo ++$x . "<br>"; // 4
    echo $x;            // 4

?>
---------------------------------------------------

<h1>Conditional assighment operators : 
</h1>

<!-- 

  The PHP conditional assighment operators are used to set a value depending on conditions:


اوبيرتورز شرطيه 
?:   :  ternary = three :
 3 اكسبرشن يعني 

$x = expr1 ? expr2 : expr3
Exp1 :
 ده اكسبريشن شرطي - حاجه بتحقق او لا - ترو او فولس 
 لو تحققت اكس = اكسبريشن 2 
 لو لا يبقي اكس = اكسبرشن 3

اكسبرش 2 و 3 اكتبهم. براحتك،  دي جمل طباعه مش شرط 

؟  نطقها لو ترو.    ،   :  نطقها لو فولس 

??	Null coalescing

$x = expr1 ?? expr2 

اكس هتساوي اكسبرشن 1 : لو اكسبرشن 1 موجود،  وقيمته مش null كتابتا 

واكسبريشن 2 زي مثل else ، يعني لو مش موجود يبقي دي...  Plan b ... ممكن يبقي طباعه او مثلا x = z 

مش موجود مثل لو اكس بتساوي واي،  و واي مش موجود اصلا يعني مفيش فريبل اسمه واي 

؟؟ تنطق او 

اشهر استخدام للاوبيرتور هو conditions 

 -->

 <p>

  ternary 

  $num1 = "";
  $num2 = null;

  $result = $num1 == $num2 ? "n1 ==== n2" : "n1 != n2";
  echo $result;


  هيطبع فاضي
  $y = ""; // استرنج فاضي مش نال
  $x = $y ?? "no result";
  echo $x;

  // هيطبع no result
  $y = null;
  $x = $y ?? "no result";
  echo $x;

 </p>

 --------------------------------------------------- 

 come here


               
            
---------------------------------------------------                          
                        4-  conditions 
                ################################
                ################################
                ################################
               
                if conditions معدل 
                ##########


                <?php

                /*
            
                index : if - else - elseif - nested if 
            
                    اف : يعني لو حصل كذا اعمل كذا 
                    يعني لو الشرط ترو
                    وممكن تحقق الشرط يبقي بعدم التحقق 
                    يعني لو معملتش الواجب هعاقبك 
                    وممكن الشرط يبقي مركب 
                    لو روقت وعملت الواجب هكافئك 
                    
                    ايلس : في حاله الفولس 
                    يعني لو روقت هكافئك 
                    (دي اف)
                    لو لا هعاقبك 
                    (دي ايلس)
            
                    ايلس ايف : 
                    كونديشن تاني 
                    مثل لو الرقم اقل من 10 واكبر من 20 اديله 5 
                    (دي ايف)
                    ولو الرقم اكبر من 20 واقل من 30 اديله 10 
                    (دي ايلس ايف )
            
                    نيستيد ايف : 
                    شرط جوا الشرط 
                    مثل : لو السعر من 100 ل 150 
                     (الشرط الاساسي او الاول ) (دي اف)
                    ولو السعر بيساوي 140 
                        (ده الشرط التاني او الثانوي اللي هو جوا الشرط الاول او الاساسي) (نيستيد اف )
                    قوله انت مميز 
                    (الكود بتاع تحقق الشرطين)
                    ولو لا قوله انت ف امان 
                    (دي ايلس او الفولس بتاع الشرط التاني او نيستيد او الثانوي - غير الايلس بتاعه الشروط كلها)
            
                    ملحوظه : 
                        خلي بالك من الايكويل ف الرينج 
                        مثلا : 
                        اللي جايب اكبر من 50 واصغر من  70 ببقي جيد
                        if($grade >= 50 && $grade < 70 )
                        هعمل للخمسين ايكويل لانها داخله في الشرط 
                        و السبعين مش مهعملها ايكويل لانها داخله ف الشرط التاني
            
                        return : 
                        عامله زي الفريبل بتخزن او بترجع القيم بس
                        مش بتطبعها 
                        لو عايز تطبعها اعمل ايكو ف كولينج الفانكشن
            
                        ولو الكود بتاعها اتنفذ 
                        اي حاجه بعديها ف الفانكشن 
                        تعتبر ديد كود 
                        يعني هتقف مش هتتنفذ
            
                */ 
            
                /*
            
                لان ناتج الاكسبريشن صفر لان
                اربعه مودلس اتنين بصفر 
                  و نوت بتعمل العكس - فعكس الصفر اللي هو فولس يبقي ترو يعني الشرط تحقق
            
                  ملحوظه : اي حاجه تعرف تعمل فيها شورت هاند اعمل
            
                */ 
            //     $number = 4;
            //    if(!($number % 2)){
            //         echo "3ash"; // 3ash - التفسير فوق  
            //    }
            
                /*
            
                        لان ناتج الاكسبريشن صفر لان
                            اربعه مودلس اتنين بصفر 
                            فده هيرجع فولس 
                            لذلك ايلس هتتنفذ
            
            
                */ 
            
            //    $number = 4;
            //    if($number % 2){ // false - التفسير فوق
            //         echo "3ash";
            //    }else{
            //         echo "false";
            //    }
            
            
            //  Write a PHP function to compute the sum of the two given
            // integer values.
            // If the two values are the same, then returns triple their
            // sum
            
               /*
            
                     يبقي لازم تحطهم ف اقواس عشان البريسيدنس او الاولويه 
                     لانك لو معملتش كده 
                     الضرب ليه اولويه عن الجمع 
                     فهيضرب الاول ثم هيجمع 
                     فيخرب الدنيا 
                     لكن الاقواس ليها اولوبه عن الضرب 
                     فكره هيجمع الاول 
                     وناتج الجمع هيضربه ف 3 
                     
                      ريترن : 
            
                        ولو الكود بتاعها اتنفذ 
                        اي حاجه بعديها ف الفانكشن 
                        تعتبر ديد كود 
                        يعني هتقف مش هتتنفذ
                        لذلك ممكن تستغني عن الايلس مع الاف وتكتبها هي بس 
            
            
                */ 
            
            // function check($n1 , $n2){
            //     if($n1 == $n2){
            //         return " triple : " . ($n1 + $n2) * 3; // () - precedence 
            //     }
            
            //     return $n1 + $n2; // بدال else
            
            // }
            
            // echo check(12 , 13) . "<br>"; // 25
            // echo check(12 , 12) . "<br>"; // 24 * 3 = 72
            
            // Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30
            
            /*
            
                  اكتب الفريبل لوحده بالكونكتنيت 
                  بلاش تلزقه مع ايكو التيكست
                  يعني بلاش 
                  echo "true : $n1";
            
                */ 
            
            // function check($n1 , $n2){
            //     if($n1 == 30 || $n2 ==  30 || $n1 + $n2 == 30 ){ // multible ||
            //             return "true : " . $n1 . "/" . $n2; // write variable alone - above
            //     }
            
            //     return  "false : " . $n1 . "/" . $n2;
            // }
            
            // echo check(15,16) . "<br>"; // false
            // echo check(15,15) . "<br>"; // true
            // echo check(30,15) . "<br>"; // true
            // echo check(30,30) . "<br>"; // true
            
            /*
            
                index : isset
            
                  يبقي از سيت بيتشك من الفريبل وقيمته 
                 يعني   لو 
                  الفريبل موجود وقيمته مش بتساوي نل
                  بيرجع ترو 
                  عكس كده فولس
            
                */ 
            
            // $name = "Abdo";
            
            // echo isset($name) . "<br>"; // true
            
            // $name1 = "Abdo";
            
            // echo isset($name) . "<br>"; // false
            
            // $name = null;
            
            // echo isset($name); // false
            
            
            /*
            
                  شويه شورت هاند ل ايف : 
            
                  سبيس شيب 
                  از سيت 
                  ترنري اووبريتور 
                  نل كوالسينج 
            
                  ترنري - ternary operator : 
            
                  يبقي الترنري اوبريتور 
                  هو شورت هاند ل ايف وايلس 
                  في سطر واحد 
                  يعني ترو وفولس في سطر واحد
                  بكتب الكونديشن ثم 
                علامه استفهام و الاكسبرشن ف حاله الترو 
                ثم الكولون او النقطتين والاكسبريشن ف حاله الفولس 
                وباسين كل ده للايكو واطبع 
                او للفريبل واطبع الفريبل
                
            
            
                */ 
            
                $age = 30;
            
                // echo $age == 30 ? "age is 30" : "age is not 30"; // 30
            
                // $condition =  $age == 30 ? "age is 30" : "age is not 30";
                // echo $condition; // 30
            
                // $condition = ($age == 30 && isset($sun)) // اكسبريشن معقد مع التيرنري بحط الكونديشن ف اقواس - انظر تحت 
                //  ? "age is 30" : "age is not 30";
                // echo $condition; // is not 30 
            
                // $condition = ($age == 30 && isset($sun))  ? "age is 30" : "age is not 30";
                // echo $condition; // is not 30 
            
            
                /*
            
                    null coallasing
                    نيل كولسينج : 
                    ي هرجع قيمه ي هرجع قيمه اخري 
                    هي عامله زي از سيت 
                     : يعني بتتشك ع الفريبل و القيمه 
                    الفريبل انه يكون موجود 
                    والقيمه انها مش نل 
                    ولكن الزياده 
                    هو في حاله الفولس او مش موجود الفريبل او قيمته بتساوي نل 
                    بحط اكسبريشن مثل : مش موجود  
                    زي ايلس من الاخر 
                    من الاخر : هي ميكس من از سيت + ايلس 
            
                */ 
            
                // echo $hamada ?? "hamada msh mogod"; // msh mogod
                $result =  $hamada ?? "hamada msh mogod"; // ممكن تاسين النتيجه لفريبل
                echo $result; // msh mogod


                ################################################################

       <!-- 

        Conditional statements are used to perform different actions based on different conditions.
        بمعني : اقرا اللي تحتيها 
        
        
Conditions  : 

احنا بنحاول ننقل ذكااء الانسان للكمبيوتر،  وطريقه تفكيره وتعامله مع الاشياء ، وف شغله
كل فتره بنعمل update عشان نوصل او نحاكي الانسان 
فمثلا oop مستوحي من حياه الانسان 

ف if حاجه ف حياتنا،  بمعني لو 
يعني بحط شرط لو تحقق كذا : اعمل كذا،  لو لا اعمل كذا 
لو تحقق مش شرط ترو،  ممكن فولس مثل : 
لو احمد مرحش المدرسه اعمل حاجه معينه 


In PHP we have the following conditional statements:


if statement - executes some code if one condition is true  // 
 1  - لوعايز تعمل ترو بس -  بمعني لو - 1 كوندشن

if...else statement - executes some code if a condition is true and another code if that condition is false // 
لو عايز تعمل  ترو وفولس  -  بمعني لو "if"  و   لولا "else" -  دي 2 كونديشن

if...elseif...else statement - executes different codes for more than two conditions //
 بمعني لو"if"     ولو "elseif"  و   لو لا "else" - اكتر من 2 كونديشن


        -->

        ------------------------------------------------
      <h1>
        PHP - The if Statement
      </h1>  
      ###########################################

      <!-- 

        The if statement executes some code if one condition is true.
        يعني :
         لو عندي كوندشن #واحده 
        وكود هينفذ لو هي ترو 
        "طب لو فوفلس : مفيش حاجه هتتنفذ"


        طريقه كتابه if زي اافانكشن 

Syntax
if (condition) {
  code to be executed if condition is true;
}



مثال واقعي :

 حد، هيدفع اوتلاين فهيشتري ب 1000 جنيه 
فانت منتظر الفييزا بتاعته يبقى فيها اكتر من الف جنيه عشان يشتري المنتج،  فلو الفيزا فيها اقل من 1000 هطلعله رساله تقوله مينفعش تشتري عشان الليمت اللي ف الفيزا قليل او اقل من 1000 جنيه 


       -->

       <p>

        // if statement

$num1 = 100;
$num2 = 50;

if($num1 < $num2){
    echo "number one is greater than number two";
}
       </p>

-------------------------------------------------
<h1>
  else
</h1>

<!-- 

  Else : 


معناها ولو لا "العكس - او فولس"  .... هعمل كذا (كود)
Else = false


مثال : 

لو(if) خلصت كورس php وطبقت عليه هجبلك كرسي مريح 
ولو لا... (Else ): هتكمل مذاكره كورس 

The if...else statement executes some code if a condition is true and another code if that condition is false. 
يعني لو عايز اعمل ترو وفولس شرطي


Syntax
if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}

ايلس : بتبقي من غير اقواس البارينسز ()
عموما  اللي بيتعمل معاها اقواس البارنسيز هي if ، عشان بيتحط فيها الشرط او condition 

 -->

 <p>

  // check $n is odd or even
 
  $n = rand(2,100);
 
  if($n % 2 == 0){
     echo "$n is even";
  }else{
     echo "$n is odd";
  }
 
 </p>

 ------------------------------------------------

 <h1>
  practice 1 on if 
 </h1>

 <!-- 

  
Even زوجي ،  odd فردي 

اي رقم زوجي هيقبل القسمه ع 2 ، يعني مش هيبقي فيه باقي قسمه 
لكن لو قسمته ع 2 وف باقي قسمه،  يبقي. مبيقبلش القسمه ع 2 ، يعني مش زوجي.  ، يعني من الاخر فردي 

باقي القسمه بيبدا من 1 ، مش 0
 لان اي حاجه ع صفر بصفر   م 

  -->

  <p>

    // check $n is odd or even
 
    $n = rand(2,100);
   
    if($n % 2 == 0){
       echo "$n is even";
    }else{
       echo "$n is odd";
    }
   
  </p>

  -------------------------------------------------

  <h1>
    elseif
  </h1>

  <!-- 

    
Elseif : 

مثال واقعي : 

انت شغال ع ويبسايت. ، الكلاينت بيشتري من عندك منتجات معينه
صاحب البيزنس قالك عندي 3 شروط او حالات 
  لو اتحقق فيهم حاجه هيحصل حاجه ولو اتحقق حاجه تانيه،  هيحصل حاجه تانيه وهكذا 
  "كل شرط هيتحقق فيهم هيؤدي الي نتيجه معينه مختلفه عن الاخري " 
فمثلا لو الراجل اشتري بما يساوي او اكتر من 100 جنيه هتديله خصم 10% "if "
ولو ب 200 خصم 20% وهكذا "elseif"
ولو مش حاجه من التلاته دول،  او رقم تاني اعمل حاجه تانيه  " else " 

معناها : ولو (شرط اخر )

ممكن استخدم. كذا elseif 

ممكن استغني عن else مع else if 
"طب لو كله فولس مش هيطبع حاجه "

The if...elseif...else statement executes different codes for more than two conditions.
"2 كوندشن قصده : ترو وفولس "

Syntax : 

if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true; 
"هيتنفذ لو اول شرط فولس وهو ترو"
} else {
  code to be executed if all conditions are false;
}
"هيتنفذ لو كل الحالات او الشروط  فولس "


ملحوظه : 

فرق بين علامه الاسيمنت (= ) والايكولتي (==)

يبقي انت البيزنس بيديك requirements ، وانت بتطوع الكود بتاعك. ع اساسها 

Condition statement : 
حالات او احتمالات او شروط 

   -->

   <p>

    $price = 300;
   
    if($price == 100){
        echo "your discount is 10%";
    }elseif($price == 200){
        echo "your discount is 20%"; 
    }elseif($price == 300){
        echo "your discount is 30%";
        // اليس تتضمن اي حاجه هتوقع من اللي فوق مثل 50 
    }else{
        echo "your discount is 50%"; 
    }
 
 
    // elseif without else 
     
    $price = 100;
    
    if($price == 100){
        echo "your discount is 10%";
    }elseif($price == 200){
        echo "your discount is 20%"; 
    }
 
   </p>

   ---------------------------------------------------

   <h1>
    practice 2 on if : else if : calculator
   </h1>

   <!-- 

    
تطبيق الاله الحاسبه : 

ايه مكونات الاله الحاسبه : 
رقمين او operand  و operator (+,-,*,/)

فهجرب اعمل العمليه الاولي بشكل بسيط
واكتب الالجوزم بتاعها او خطوات حلها 
(فكر ف ابسط حاجه تحل بيها المشكله وبعد كده كبر ودينمك براحة)

يبقي ملخص حل اي مشكله : 

افهم هو عايز ايه بالظبط وايه مكوناته وابسط شكل من اشكاله 

ثم فكر ف ابسط حاجه ممكن تتعمل واعملها بالورقه والقلم واعملها الجورزم وطبقه بالكود 

بعد كده كبر ودينمك ع راحتك 



ازاي تدينمك حاجه : تخليها اراي  و تخلي الاندكس Rand 

مش لازم الكوندشن او الشرط ف if 
يبقي عمليه حسابيه،  ممكن يبقي شرط واحد فقط 
مثل : لو operatot  +  "شرط"
 اعمل كذا "كود " وهكذا 


 canot divide on zero : 

 لو ابليكاشن اله حقيقي لكن هنا 
 عامل راند من 1 مش 0 


    -->

    <p>

      // get number 1 
      // get number 2
      // get operator :  = - / * 
      
  
      $number1  = rand(1,100);
      $number2  = rand(1,100);
      $operators = ["/","*","-","+"];
      $count = count($operators)-1;
      $operator = $operators[rand(0,$count)];
  
      echo $number1  . "<br>";
      echo $operator . "<br>";
      echo $number2  . "<br>";
      echo "="       . "<br>"; 
  
  
      if($operator == "+"){
          echo $number1 + $number2; 
      }elseif($operator == "-"){
          echo $number1 - $number2; 
      }elseif($operator == "*"){
          echo $number1 * $number2; 
      }elseif($operator == "/"){
          if($number1 != 0 && $number2 != 0){
            echo $number1 / $number2; 
          }else{
            echo "cannot divide on zero"
          } // ده لو تطبيق اله حاسبه حقيقي 
      }else{
          echo "type correct value";
      }

    </p>

    another solution 
    ----------------------------------------------
    <!-- 
اله حاسبه تفاعليه بالوبتسراب وتم عملها بطريقه ال form 

     -->

    // Make a calculator with these operations using if and elseif
$frist_num=$_POST['num_1']!=null?$_POST['num_1']:0;
$second_num=$_POST['num_2']!=null?$_POST['num_2']:0;
$result=0;
if(isset($_POST['Submission'])){
     $result=$frist_num+$second_num;
}elseif(isset($_POST['Subtraction'])){
    $result=$frist_num-$second_num;
}elseif(isset($_POST['Multiplication'])){
    $result=$frist_num*$second_num;
}elseif(isset($_POST['Division'])){
    $result=$frist_num/$second_num;
}elseif(isset($_POST['Power'])){
    $result=pow($frist_num,$second_num);
}elseif(isset($_POST['Modulus'])){
    $result=$frist_num%$second_num;
}

<form method="post">
  <div class="row g-2">
      <div class="col-6">
          <label for="" class="col-sm-2 col-form-label">number 1</label>
          <input type="text" class="form-control" name='num_1'>
      </div>
      <div class="col-6">
          <label for="" class="col-sm-2 col-form-label">number 2</label>
          <input type="text" class="form-control" name='num_2'>
      </div>
      <div class="col-12">
          <div class='w-100 h-20 border pt-2 pb-2'>result: <?php echo $result; ?></div>
      </div>
      <div class="col-3">
          <button class="btn btn-primary w-100" name='Submission'>Submission</button>
      </div>
      <div class="col-3">
          <button class="btn btn-primary w-100" name='Subtraction'>Subtraction</button>
      </div>
      <div class="col-3">
          <button class="btn btn-primary w-100" name='Multiplication'>Multiplication</button>
      </div>
      <div class="col-3">
          <button class="btn btn-primary w-100" name='Division'>Division</button>
      </div>
      <div class="col-3">
          <button class="btn btn-primary w-100" name='Power'>Power</button>
      </div>
      <div class="col-3">
          <button class="btn btn-primary w-100" name='Modulus'>Modulus</button>
      </div>
  </div>
</form>
</div>

    -----------------------------------------------------------------------------------------------------------

    <h1>
nested if 
    </h1>

    <!--

      
Nested if : 

بيبقي عندي الشرط 
و*بعد* الشرط ده بتحقق من شرط تاني
"شرطين مترتبين ع بعض او جوا بعض " 
مثل تشيك ان النمبر even و او اند > 50 
"ممكن يتعملوا ف كوندشن واحد "

هاك او hack : اول متلاقي شرطين جنب بعض او and بين شرطين يبقي nested if

وانا شغال ف اي كود مبكتبش الاسكريبت مره واخده 
بكتب خطوه خطوه 
فمثلا لو عندي شرطين اتحقق من الاول واتأكده انه تمام 
ثم ادخل ف التاني ، عشان لو فيه غلطه حصلت،  اعرف منين 

نيستيد اف بتبقي جوا اف 
وممكن نيستيد، اف تبقي ب else بتاعتها 

You can have if statements inside if statements, this is called a nested if.

Syntax: 

if condition1 {
     if condition2 {
     // code to be executed if both condition1 and condition2 are true
    // يبقي االكود بيتنفذ لو الاتنين كوندشن ترو 
     }else{// لو الكوندشن التاني فولس}
}else{// لو الكوندشن الاول فولس}

// انظر المثال للفهم - بص ف vs



الفرق بين nested if vs elseif : 

nested if : 

بيديك شرط واحد مركب او جوا بعض او مترتبين ع بعض 
مثل : check if number even,  >50 

ملاحظه : 

الشروط المركبه او اللي جوا بعض او المترتبه ع بعض 
متنفعش غير ب nested if 
عشان انت محتاج 2 اليس : 
اليس لو الكوندشن الاول فولس 
زاليس لو الكوندشن التاني فولس 
"يعني مينفعش تعمل  اف واحده ب اند &&"


elseif : 

لو اكتر من شرطين او 2 كوتديشن منفصلين 
مثل : 
If price 100 ...discount 10 
If price 200 ...discount 20 
If price 300 ...discount 30 

      -->

      <p>

        // even , <50
  
        $number = rand(1,100);
      
        if($number % 2 == 0){
            if($number < 50){
                echo "$number is even and smaller than 50";         
            }else{
                echo "$number is even";    
            }  
      }else{
            echo "$number is odd";    
        }
          
      
      </p>

      -----------------------------------------------------------------------------------------------------------

      practice on if 
      ####################

      <!-- 

        
Get limit random : 

ف شرطين اكبر من 100 واقل من 200 فهتستخدم 
And... && 

60 اصغر من 100 و 150 ، فلازم تحدذ رينج 
الرقم الاكبر من 50 واصغر من 100 ..ده منطقي اكتر 

1- limit
2- check 

Rand with substr : 

Start... Offset( 0 , count - 1 ) : 
بيبدا من صغر عشان اندكس 
End... Length ( 1 , count)  
بيبدا من واحد عشان لينث 
وحاول تثبت الماكسميم للاتنين قبل النهايه بشويه 

لو حاجه هستسخدمها كذا مره حطها ف متغير 
عشان تطبق مبدا
 dry :  don't repeat your self 
 هي الفانكشن هتتنفذ مره واحده وانت هتاخد الناتج
 المتخزن تتشيك بيه 

ملحوظه : 

اي استرنج هتلعب فيه سمي الحديد new string 
واي حاجه هتعملها للاسترنج الجديد ..زود الكلمه عليه 


ملاحيظ عامه : 

التسميات- التسميه  : 

اي حاجه هيتلعب فيها new string او باسم الفانكشن مثل split .. Split string  ، string sub
ممكن اختصارات : pos... Position 
ممكن ارقام : part1 ...او part one 
ممكن تسمي كل اللي هتطبعه ف html 
Message + الحاجه ex : message _ ages

امثله : string compare ... عشان عندي سترنج عادي و if 
Description 1 &2 :  
عشان بشتغل ع الاسترنج اللي اسمه ديسكريبشن مرتين 
 
لو اتا ب راند من 0 ل 50 : 

ممكن يجبلي مره 30 ومره 40 وهكذا 
فلو عايز من 0 ل 50 مينفعش رند 

لو هتحط فريبل جوا سترنج الاحسن كونكتنبت 


راند دي ممكن مع حاجتين : 

سبستر substr بتاعه الاسترنج وهراند ستارت وايند 

او اراي وهعمل array Rand ... ولو هو سترنج،  ممكن اعماه اكسبلود واراند 

حاول تخلي ال php كلها غوق وhtml كلها تحت


       -->

       $text = "Lorem, ipsum dolor eraasoft sit amet consectetur eraasoft adipisicing elit. Pariatur, non labore totam distinctio eraasoft aspernatur voluptas neque, provident autem eraasoft alias impedit ex laborum perferendis amet accusantium, dolorem eraasoft nam. Quod, at quisquam? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea voluptates minus eos tenetur eaque delectus commodi provident nemo eligendi nostrum. Quam nam nobis velit possimus totam repellat iure magnam a.";


//get limit random and check if (<50 , <100 , <150 , else)


$start = rand(0,400);
$end   = rand(1,400);
$new_string = substr($text,$start,$end);
$new_string_length = strlen($new_string); 
echo $new_string . "<hr>";

if($new_string_length < 50){
    echo "$new_string_length is smaller than 50";
}elseif($new_string_length >= 50 && $new_string_length <100 ){
    echo "$new_string_length is greater than 50 and smaller than 100";
}elseif($new_string_length >= 100 && $new_string_length < 150){
    echo "$new_string_length is greater than 100 and smaller than 150";
}else{
    echo "$new_string_length is greater than 150";
}

---------------------------------------------------

pracice on if 
###############

<!-- 
 - check if word found or not by if + strpos

 
ف طباعه if conditions ف html : 
اعمل كل جمل الطباعه ف متغير واحد تطبعه ف html 
و الحاله اللي هتحقق هتتطبع 


لو هتعمل رتد لكذا سترنج : 
كل استرنج تعمله رند عشان ميبقوش شبه بعض 


ايرور : لما يقولك مش متوقع حاجه،  بص ع اللي قبليها 



ممكن الكوندشن يبقي فانكشن 
ولو اتحققت هيبقي ترو 
لو لا يبقي فولس 



 -->


 <?php

 // If the string have “gain”

 $description = "no pain , no gain ";

 $word = "gain";
 $position = strpos($description , $word); 

 if($position){              // =  $position != null
     $find =  "success word";
 }

 // If the string have ( peen )

 $word_position = strpos($description , "peen");
 
 if($word_position){         // =  $word_position != null
     $pos =  "success word";
 }else{
     $pos =  "wrong word";
 }

?>
<h1>If the string have “gain”</h1>

<h3><?php echo $find; ?></h3>
<hr>
<h1>If the string have ( peen )</h1>
<h3><?php echo $pos; ?></h3>




-------------------------------------------------------

switch 
##################

<!-- 

  
Switch : 

سوتش اسرع من if ف حالات معينه او خاصه بسويتش

انت عندك الحاجه بتتعمل بكذا طريقه، بس الشطاره انك توظف كل حاجه ف مكانها صح
فتعمل كود optimized و ال performance بتاعه كويس جدا ومستغل ميموري كويس 
يعني الرك ع الديفلوبر مش اللغه 

() : 

الشرط اللي عايز اتحقق منه  ،  الحاجه اللي هنقيس عليها او هقارنها بيها "condition "
لازم تبقي قيمه ثابته،  مينفعش قيمه 
فيها logical or comparison operator 
"تحليلي :
 = اوبريتور ، يعني حاجه = حاجه او بتساوي قيمه ثابته " مثل : color = red " 
غالبا كوندشن بتبقي فريبل او اراي (فريبل كبير)

فمثلا هنا بتشيك او بتأكد اللون او الكلور:  احمر ولا 
فهبدا احط الحالات بتاعتي او الكسيز او cases اللي ممكن تبقي موجوده للون او الكلور 

يبقي condition + cases 


يبقي اتا عندي حاجه معينه بقارنها باكتر من حاله 
ممكن تتواجد عليها فانا عندي الكلور 
ممكن يبقي جرين او ريد او بلو 
فلو الحاله اتحققت مع الفريبل او البرميتر اللي بنمرره 
يبقي الحاله دي هي اللي هتتنفذ 

واهم حاجه متنساش تكتب بريك : عشان تفرمل الكود او كومبيلر يدخل ع ال كيس اللي بعديها 
Prevent to prevent the code from running into the next case automatically

بتحط بعد الكيس كولون وليس سيمي كولون. 

Default in switch= else in if  : 
ومبتكتبش بريك ف الديفولت 

ليه سويتش اسرع من if ف حالات السويتش
"تحليلي : القيم الثابته "  : 

لانه بيقيس ع الحاله وبيروح ع الكيس المناسبه مباشره 
يعني مثلا لو ريد هيروح للريد علطول 
فالكلور ريد،  فهو بيروح ع الريد دينمك باستخدام go 

لكن if بيعدي ع واحده واحده يتشكها ، شرط.. شرط 
بيعدي عليه لغايه ميوصل للشرط بتاعه وينفذه 
وبعد كده خلاص 


   difference between switch & if : 
   switch : in (=)
   مثل : طباعه ايام العمل او طباعه اسم الطالب بادخال الكود 

   if      : in (<,>)
   مثل : اعطاء اللقاح لمن اعمارهم بين 1 و 4 سنيين 

 -->

 $color = "red";

switch($color){
    case "green":
        echo "color is green";
        break;
    case "red":
        echo "color is red";
        break;
    case "orange":
        echo "color is orange";
        break;
    default:
        echo "your color is not recognized";
}

---------------------------------------------------

practice on : switch
###############################

<!-- 

  

يبقي دينمك : اراي واراي راند 

يبقي الاراي بطبع منها قيمه واحده،  يعني حاجه ثابته فهي لاتنافي ثبات القيمه بالنسبه لسوتش 

Array - Rand : 

هي بتظبطلك موضوع راند اندكس ، يعني بتجبلك اندكس عشوائي 
وبتريحك من قصه منميم وماكسميم بتاعه ريند 

لو ف 2 كيس نفس النظام او الطباعه او الكود : 

بتعمل ال 2 كيس تحت بعض،  وبتكتب كود واحد 
كما موضح بالمثال 
فلو لقي اي كيس فيهم،  هينفذ الكود 

كانها or : لو اي واحد فيهم ترو بيتنفذ كود 

امتي : لو 2 كيس ليهم نفس الكود 
 -->


 <!-- // make this check dynamic and combine green case with red  -->


$colors = ["red","blue","white","green"];

$index = array_rand($colors);
$color = $colors[$index];
echo $color . "<br>";

switch($color){
    case "green":
    case "white":
        echo "color is green or white";
        break;
    case "red":
        echo "color is red";
        break;
    case "orange":
        echo "color is orange";
        break;
    default:
        echo "your color is not recognized";
}

-----------------------------------------------------------------------------------------------------------




5- loops
################################
################################
################################

for - while -do while
--------------------------------------------------------


<!-- 


Control statements : 

دوائر التحكم : 

دوائر التحكم اللي انا بتحكم فيها  ، تدور وتلف وتكرر كود معين او فعل معين 
بتتحكم فيها ازاي؟  عن طريق اتا بحط شرط ،  طول مبيتحقق او ترو هي بتفضل تلف وتكرر 
اول ماللشرط ميتحققش او يبقي فولس هتوقف او هتخرج من اللوب 

اللوبس مثل الشمس *زي الفانكشن مثل استماره البطاقه *

يبقي احنا بنحاول نحاكي الانسان وحياته وشغله ف سوفت وير 

والتكوار شئ اساسي ف حياه الانسان مثل : 
تعاقب الليل والنهار،  الشمس والقمر 
روتين معين لمصنع لانتاج منتج 
او لانسان مثل بيشرب القهوه كل يوم وبينام كل يوم 

مايكافئ هذا المبدء ف سوفت وير او الكمبيوتر 
هو لوبس او التكرار 

التكرار هو انه يخش ف دايره معينه ميطلعش منها الا لما يحقق الشرط كاملا 
زي الانسان بيفضل يقوم وينام لغايه ميموت 
يعني بيفضل ف لوب لغايه ميموت،  يعني الموت بيقطعه او بيخرجه من اللوب 


عندنا 3 استايل لكتابه الكود ف اللوبس : 

Do... Do while... For

اقواس الللوبس مثل ال if مثل function : ..()...كيرلي براكتس

ال condition expression : 

طول ما الكونديشن بتحقق او ترو هيفضل يلف ويكرر ويلوب 
اول متبقي فولس او متتحققش هيطلع  او هيخرج من اللوب زي الموت مبيخرج الانسان من الحياه 

ال do.. While : 

هي while بس،  الويل بتنزل تحت وبحط بهديها سيمي كولن 
وبحط do فوق بدالها 

مكونات اللوب : 

1- ال initial value : قيمه اساسيه 

2- اكسبرشن او شرط 

3- ال incremanter :

  او ممكن decrementer
لو نسيته هيعمل انفنتي لوب 
لان مثلا : i   اقل من 10 &شرط&
وهي بواحد &قيمه اساسيه او انشيل فاليو&
وانا عملت لوب وتكرار مش هيقف الا لما الشرط يبقي فولس او ميتحققش
ومن غير ال انكريمنتر عمره مهيوصل انه يزيد لغايه ميحقق الشرط  كامل 
لذلك هيبقي انفنتي لوب



مثلا : يعني لما j تساوي واحد$انشيل فاليو $،  و j اصغر من 10 $شرط$
اقعد اطبع ال j وزود واحد &لوب&
لغايه ما ال j تساوي 9 يعني اصغر من 10 &شرط بتاعي&

اقواس البارنسيز طول ماهي لوحدها لازم سيمي كولون 
لكن لو بعديها كيرلي براكتس مش لازم.. 

ال for : هي الاكثر استخداما
ال for each : الاكثر استخداما ف php 

For (3 expression )

ال for : بتلملك 3 expression  كله ف البارنسيز، فيعتبر مختصره 


w3 : 
----------

Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.

its about repeat

Loops are used to execute the same block of code again and again, as long as a certain condition is true.

In PHP, we have the following loop types:

while 
- loops through a block of code as long as the specified condition is true

do...
while - loops through a block of code once, and then repeats the loop as long as the specified condition is true

for
 - loops through a block of code a specified number of times

foreach
 - loops through a block of code for each element in an array

 Syntax pf for : 

for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}
Parameters:

init counter:
 Initialize the loop counter value

test counter:
 Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop 
 ends.

increment counter:
 Increases the loop counter value

 -->


code 
---------
// old tradational way 

// $i = 0;
// echo $i = 0 + 1 . "<br>"; 
// echo $i = 1 + 1 . "<br>";  
// echo $i = 2 + 1 . "<br>";  
// echo $i = 3 + 1 . "<br>";  
// echo $i = 5 + 1 . "<br>"; 
// echo $i = 6 + 1 . "<br>"; 
// echo $i = 7 + 1 . "<br>"; 
// echo $i = 8 + 1 . "<br>"; 
// echo $i = 9 + 1 . "<br>";

// old dynamic way 

// echo ++$i . "<br>"; 
// echo ++$i . "<br>"; 
// echo ++$i . "<br>"; 
// echo ++$i . "<br>"; 
// echo ++$i . "<br>"; 
// echo ++$i . "<br>"; 
// echo ++$i . "<br>"; 
// echo ++$i . "<br>"; 
// echo ++$i . "<br>"; 
// echo ++$i . "<br>"; 

// loop with while 

// while($i<=10){
//     echo $i . "<br>"; 
//     $i++; 
// }


   // do while loop
// do{
//     echo $i . "<br>"; 
//     $i++; 
// }while($i<=11);


// for loop

// for($i = 1; $i <= 100; $i++ ){
//     echo $i . "<br>"; 
// }

----------------------------------------------

practice on loops 
------------------



<!-- // loop 1 : 50 h
//even or odd  -->


<!-- 

  
تطبيق لوب : 

اول متلاقي الموضوع صعب عليك،  حل خطوه خطوه 

ال incrementer ف forloop مبهملش بعده سيمي كولون 

واتت بتعمل. كونكتنيت،  ادي سبيس ف اول الاسترنج 
لو بتكونكتنيت بكلام 

 -->

 code 
 ---------

 // loop 1 : 50 
 //even or odd 

 for($i = 1; $i <= 50;  $i++){
      if($i %2 == 0){
          echo $i . " is even" . "<br>" ;
      }else{
          echo $i . " is odd"  . "<br>";
      }
 } 

 ----------------------------------------------

2
---------

<!-- 

  
Table. Table .table-bordered *class*(bootstrp) : 

هيديك table متسطر ومقسوم حسب th او العنوان 

ف th بتاعه هيد او العنوان ف التابل ... بخلي اول حرف كابيتل 


Alternative syntax -  sugar syntax : 

بستبدل كيرلي براكتس الاولي  ب  كولون : 
و التانيه ب endfor;  
من الاخر : gor and endfor 
ويمكن استخدامها مع if و all kind of loops
والكود اللي ف النص هكتب ف المكان اللي 
عايز اطبع فيه 
*تحنيكه : بستخدم شوجر سينتاكس ، لما يكون ف مسافه بين for و قفلتها مثل لو بلوب ع tr ف تابل *

ليه هلوب ع tr وليس td : 

لاني محتاح 50 صف اكتب فيه data 
وهطبع date ف td 
فهلوب ع tr عشان يعملي خمسين صف اكتب فيهم 
يعني بالبلدي : 
عايز تلوب طول : tr 
عرض : td 


تاجات php  *مش فاتحه وقافله بس ولكن تاح كامل وتاج كامل مثل : شوجر سبنتكس بتاع لوب* 
بتبقي متصله مهما كتبتها ف اماكن. مختلفه 
طالما ف سكريبت php 

 -->

 code 
 ------------------

 <!-- 
  loop from 1 to 50 and check if even or odd in table bootstrap
  -->
 
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> bootstap demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1> Hello loop! </h1>
    <div class="container">
        <div class="row">
                <div class="col-12">
                        <table class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Description</th>                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i = 1; $i <= 50; $i++): ?>    
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <?php  
                                            if($i % 2 == 0){
                                                echo "is even";    
                                            }else{
                                                echo "is odd";    
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                </div>
        </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>


------------------------------------------------

3
---------

<!-- 

  
الحاجات بتدخل اللوب وليس العكس  : 
لان لازم اللوب يحاوطها،  عشان يلف عليها او يكررها او يلوب عليها 
مثل : طباعه اراي ب $I 
هطبع الاراي جوا اللوب وليس العكس*اي ف [] بتاع الاراي *
انت بتلوب ع الاراي كلها مش الاندكس بس 

اللوب مع اندكس الااراي : 

مثلا اراي : 5 عناصر،  يعني من 0 ل 4 اندكس،  حيث  i  دي اندكس 

I < count (5)...recommend 
I <=  count -1 (4)

لازم تكتب الكوينت مش تعد الاراي بنفسك 
عشان يبقي الكود دينمك بحيث لو زادت او نقصت الاراي،  يتأقلم معاها 

والافضل انك تحط الكوينت ف فريبل وتطبعه
ليه لانك لو عملت العكس،  اللوب هيفضل ينفذ الفانكشن 
ف كل. لفه،  يعني لو الكود هياخد 2 ثواتي،  هيبقي 3 

*تحنيكه : واعتقد مع if برده ، لانه بيفضل يتشك كيس ..كيس. Case، فهفضل ينفذها ف كل تشيك !*

ريح دماغك اي فانكشن حطها جوا فريبل واطبعه

 -->

 code 
 ---------

 $colors = ["red","blue","white","green","black"];

 // print array dynamic with while loop


 // for loop

 $count = count($colors);
 for ($i = 0; $i < $count; $i++){
     echo  $colors[$i] . "<br>";
 }

 // while

 $count = count($colors);
 $i = 0;
 while($i < $count){
     echo $colors[$i] . "<br>";
     $i++;
 }

 // do while 
 
 do{
     echo $colors[$i] . "<br>";
     $i++;
 }while($i < $count);

 ------------------------------------------------

<!-- 
  display array in ul li dynamically
 -->

 <!-- 
ملاحظه ف emmat  : 
دوت .   : بتعمل كلاس 
ال < : بتعمل تاج 


لو هلوب ع اراي وهحطها ف ul 
هخلي الاراي نفسها ف كود php برا ul 
وهلوب ع ul.. Li 

جوا كود بوتستراب : 
خلي الايكو لوحدها 
و بخلي incrementer ف حاله while 
ف تاج php لوحده لتنظيم كود 


اي حاجه فيها تكرار هستخدم لووب مثل عرض اراي 

وانت بتلوب لازم هتفضل اصغر من لغايه متوصل الهدف 

بالتسبه لموضع فورمات او الشكل والمسافات 
اكتب كودك عادي وظبط ف الاخر 
المهم كودك يبقي readable 
بس من غير افوره 


ممكن تكتب تاج php جوا كلاس بوتستراب 



  -->

  code 
  -----------

  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> bootstap demo </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
      <h1> colors </h1>
  
    <!-- loop with while &
     check if color green to make background color bg- success**class** : 

 -->

        <?php
                $colors = ["red","blue","white","green","black"];
                $count = count($colors);
                $i = 0;
        ?>

        <ul>
                <?php while($i < $count) : ?>
                <li class = " <?php if($colors[$i] == "green"){echo "bg-success";} ?> "> <?php echo $colors[$i]; ?> </li>
                <?php $i++; ?>
                <?php endwhile; ?>
        </ul>

  
          <!-- loop with for  -->
  
          <?php
              $colors = ["red","blue","white","green","black"];
              $count = count($colors);
          ?>
  
      <ul>
  
          <?php for ($i = 0; $i < $count; $i++): ?>
  
              <li> <?php echo $colors[$i]; ?> </li>
  
          <?php endfor; ?>
  
      </ul>
  
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
  </html>

  -------------------------------------------------

    foreach 
    ##################

    <!-- 

      

Loop on association array and display in table. : 

هلوب ع td عشان المنتجات هتتحط بالعرض 

مع اللوب بتعمل الحاجه اللي عايز، تعملها مره واحده فقط،  مبتكررش حاجه،  بتسيب اللوب يكرر 
مثل : واحده td و هو هيكرر الباقي 
 

For each : 

بيلوب ع الاراي ويديك كي وفاليو ف كل لوب او لفه

Syntax : array as key => value 

وبما ان هو بيديك ف كل لفه الكي والفاليو مباشره 
ممكن متحتجش الكي اصلا فيبقي سنتاكس : 
array as value 
&هيفهم كده انك عاوز الفاليو مش الكي،  ولو عاوز الكي هتكتبها &

هي تسهيل من php نفسها 


الطباعه : 

الطريقه التقليديه : 
* product of key *انت بتطبع الاسوشيتيف بالكي او  

الطريقه الفاليو : 
او ممكن تطبع بالفاليو ، لانه ف كل لفه اصلا بيديك الفاليو بشكل مباشر 
Echo $ value;  

وممكن ايكو  كي = فاليو 
' لان هو كده كده بيدهملك مباشره '
  echo "$key = $value";


انظر مثال للفهم


     -->



     code 
     ---------

     <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> bootstap demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1> test </h1>

    <!-- loop in assosiaive array & display -->

    <?php  

        $products = [

          "name"  => "t-shirt",
          "price" => 155,
          "offer" => 10,
          "stock" => "available",
        ]; 

    ?>

    <table class="table table-bordered">

       <thead>
          <tr>
            <th>name</th>
            <th>price</th>
            <th>offer</th>
            <th>stock</th>
          </tr>
       </thead>
       
       <tbody>
          <tr>
            <?php foreach($products as  $value): ?>
            <td> <?php echo $value; // or $products[$key];?> </td>    
            <?php endforeach; ?>
          </tr>
       </tbody>
       
    </table> 
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>


------------------------------------------------

Loop on multidimensional array :
####################

<!-- 

  
Loop on multidimensional array : 

ازاي : 
هلوب ب for ع المالتي اراي اللي هي array of I 
"ناتج اللوب هيبقي اراي ، فمينفعش اعمله ايكو
 هيديك array to string conversion " 
ف ه nested loop ع الاراريز الداخليه : 
وف المثال ده عشان اسوشيتيف ، 
  هنيستيد ب for each 
  
يبقي السينتاكس بتاع for each 
Key = > value 
ممكن اسمي اي حاجه غير كي وفاليو مثل حماده واحمد

ا nested loop : 
لوب جوا لوب 

يمكن استخدام for each 
مع الانديكسيد والاسوشيتيف اراي 
"هي اساسا اسوشيتيف "
وبالتسبه للمالتي : 
ا nested loop 
ا for "للمالتي "
جواها for each "للانديكسيد او اسوشيتيف اللي جوا "

 -->

 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> bootstap demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1> Hello World! </h1>
 
    <?php

        $users = [
            ["name" => "khaled" , "email" => "khaled@gmail.com"],
            ["name" => "maha" , "email" => "maha@gmail.com"],
        ];

        $count = count($users);

        for($i = 0; $i < $count; $i++){
            foreach($users[$i] as $key => $value){
                echo "$key : $value <br>";
            }
        }
            
    ?> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

----------------------------------------------

display looped multidementional array and
if found maha make  background of text yellow
###############################

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> bootstap demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1> Hello World! </h1>
 
    <?php

        $users = [
            ["name" => "khaled" , "email" => "khaled@gmail.com"],
            ["name" => "maha" , "email" => "maha@gmail.com"],
        ];

        $count = count($users);        
    ?> 

    <div class="container">
            <div class="row">
                    <div class="col-12">
                            <table class="table table-bordered">
                                <thead>
                                    <!-- 
                            كل اراي بعرضها ف tr 
                            ثم كل داتا بتاعه اراي بوزعها ع td 
                                    -->
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i = 0; $i < $count; $i++): ?>
                                    <tr>
                                        <?php foreach($users[$i] as $value): ?>
                                        <td class = "<?php if($value == "maha"){echo "bg-warning";} ?>"><?php echo $value; ?></td> 
                                        <?php endforeach; ?>               
                                    </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                    </div>
            </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

____________________________________________________________________________________________________________

loop in assosiaive array 
####################

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> bootstap demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1> Hello World! </h1>
 
    <?php

        $country_list = array(
            'US'	=>	'United States',
            'AF'	=>	'Afghanistan',
            'AL'	=>	'Albania',
            'DZ'	=>	'Algeria',
            'AS'	=>	'American Samoa',
            'AD'	=>	'Andorra',
            'AO'	=>	'Angola',
            'AI'	=>	'Anguilla',
            'AQ'	=>	'Antarctica',
            'AG'	=>	'Antigua And Barbuda',
            'AR'	=>	'Argentina',
            'AM'	=>	'Armenia',
            'AW'	=>	'Aruba',);

    ?> 

    <div class="container">
            <div class="row">
                    <div class="col-12">
                            <table class="table table-bordered">
                                <thead>                        
                                    <tr>
                                        <th>State</th>
                                        <th>Country</th>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($country_list as $key => $value): ?>
                                  <tr>
                                    <td><?php echo $key; ?></td>
                                    <td><?php echo $value; ?></td>
                                  </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                    </div>
            </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

------------------------------------------------

break and continue 
##################

<!-- 
  
Break & continue 
"يعني دي تلخيص مني "
----------------- 

يعني : خروج مشروط 
امرين ف لغه البرمجه 
امر منهم بيخليني اخرج برا السكوب scope "ال break"
وامر تاني برا الدايره اللي اتا فيها بس،  ويروح للي بعدها 
"Continue"
مثلا : اعمل لوب من 1 ل 100 و لو لقيت الرقم 10 ... اطلع برا اللوب ومتكملش 
او لو ( اي شرط انت ممكن تحطه )

بريك : هيعد ل 10 وهيطلع برا اللوب خالص،  يعني اخره من 1 ل 10 

كونتنيو continue : 
يعني :     skip للشرط،  وكمل من اللي بعديها 

اطلع برا اللفه بس اللي انت فيها وكمل الباقي
يعني هيطلع برا 10 
فهيعد ل 9 ثم هيكمل من 11 لاخر الشرط 
امثله ع كونتنيو : 
متطبعش اي رقم even 
اطبع odd بس 

مش لازم الشرط يبقي معتمد ع i  ولكن ممكن يبقي من برا ... ممكن فريبل خارجي 
مثل : اعمل لوب من 1 ل 100 و لو i  بتساوي 15 واللون اخضر اعمل بريك 
هيخرج بوا اللوب كله او السكوب لو اتحقق الشرطين معا 

لاحظ : 
لازم بريك تبقي بعد ايكو "مش هيطبع الشرط نفسه مثل بريك عند 20 ، هيطبع لغتيه 19 بدل 20 "
يعني : لازم البريك ف الاخر بعد الشغل 

لازم. Continue قبل ايكو والا مش هتشتغل 
يعني : عكس بريك 

w3 :  

The break statement can also be used to jump out of a loop.


The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.

 -->

 code 
 ---------

   
 <?php 

 //break  : هيقف عند 10 

 for($i = 1; $i <= 30; $i++){
   echo $i . "<br>";

   if($i == 20){
     break;
   }
 }

 

 //continue : هيسكب الايفن وهيكمل من الاود 

 for($i = 1; $i <= 30; $i++){
   if($i % 2 == 0){
     continue;
   }

   echo $i . "<br>";
 }
?>

# end of loooooooooooooooooooooooooop
------------------------------------------------

function part2
############################


dead code 
##################

<?php

    /*

      Dead code : 
ا if....ا return ...الشرط اللي يتحقق الباقي كله بعده dead code 


    */

    function sum($n1,$n2){
        if($n1 > $n2){
            return $n1 + $n2;
        }

        // ف الفانكشن ممكن متكتبش else 
        return $n1 * $n2;
        echo "ezayk ya rayus";
    }
    
    echo sum(4,6);

?>

------------------------------------------------

type hint 
#########

<?php
declare(strict_types = 1); 

/*

      // سكريبت او فانكشن لحكم interpreter انه يلتزم
بنوع datatype وميعملش convert 


*/

/*

      
Type hint : 
بتقدر تحدد نوع البيانات بنفسك ف الفانكشن 
ف (parameter , return )

*/


    function sum(int  $n1,int $n2) : int {
        return $n1 + $n2;
    }

    echo sum(4,6);
    echo "<br>";

    // echo sum("4",6);
    // echo "<br>";

    // echo sum(4.5,6);
    // echo "<br>";


    // php8 : int | float 
    // function sum(int | float $n1,int $n2) : int | float{
    //   return $n1 + $n2;

    // echo sum(4.5,6);
    // echo "<br>";
  
  }

?>

------------------------------------------------

call by value & call by referance 
####################

<?php




/*

In variables : 

Assign by value : 
يعني من الاخر باخد نسخه من الفريبل الاصلي وبشتغل عليها 
يعني لو حصل override ع الكوبي،  الاصل مبيأثرش 

Assign by reference : 
المتغيرين بيرفيروا لبعض او بيبوينت لبعض او بيشوروا ع بعض،  زي توام فاللي بيحصل لواحد بيحصل للتاني 
والقيمه اللي ف الاول هتساوي القيمه اللي ف التاني
يعني لو واحد حصل عليه اووفرايد ، هيحصل للتاني

    Assign Variable By Reference
  - By Default, Variables Are Always Assigned By Value
  - Assigned By Reference Make Variable Alias Or Point To Another

  

  Search
  - References Are Not Pointers
*/



// $a = "Abdo";
// $b = &$a;
// $b = "Hassen";
// $a = "hoa da";


// echo " a : " .  $a . "<br>"; // hoa da
// echo " b : " .  $b . "<br>"; // hoa da




  /*

  pass by reference : 


  طريقه  : 
  واتا بعمل دكلير للفانكشن بقوله هيجلك جلوبال فريبل 
  اثر عليه في مكانه الاصلي في الميموري لما نعمل كول وتنفذ بلوك اوف كود بتاع الفانكشن 
  يعني ناتج بلوك اوف كود اللي هينفذ علي الفريبل هيبقي هو ده قيمته الجديده 
  يعني هيحصل اوفررايد 

  يعني من الاخر الكود اللي بيتنفذ جوا الفانكشن و انا بعمل كول للفانكشن هيأثر علي الفريبل نفسه 
  "يعني علي مكانه الاصلي في الميموري  ، مش هياخد كوبي ينفذ عليها الكود زي كول باي فاليو "
  
  
  شرح المثال بالاسفل : 
  لو عندي نمبر جلوبال فريبل قيمته 15 
  وعملت فانكشن بتزود 5 علي الرقم اللي بيتمررلها 
  بس مررت البارميتر ده باي ريفرنس 
  فالنتبجه ان النمبر هيتعمل عليه اوفررايد وهيبقي 20 

  من وحهه نظري فرق بين جلوبال و باس باي ريفرنس : 
جلوبال : مش بمرر بارميتر وبأثر 
باي ريفرنس : بمرر بارميتر وبأثر 


extra note : 
pass by value & reference with built in function : 
لو بتايكو الفانكشن علطول من غير متبشها في فريبل او اراي جديده يبقي باس باي ريفرنس 
لو العكس يبقي باي فاليو 
Ex: 
echo strlen (by reference )



  

Function
- Passing Arguments by Reference
--- By Default, Function Arguments Are Passed By Value
--- If The Value Of The Argument Inside The Function Changed when made call and run the function code
 It Will Not Change Outside
--- To Change It Outside Pass The Argument By Reference


*/



// pass by value / default   
// function add_five($number){
//     $number += 5;
//     return $number; 
// }

// $number = 15;

// echo add_five($number) . "<br>"; // 20

// echo $number; // 15


// pass by referance :
// function add_five(&$number){
//     $number += 5;
//     return $number; 
// }

// $number = 15;

// echo add_five($number) . "<br>"; // 20

// echo $number; // 20


// another example : 

// // call by value or default
// function fillcolor($color){
//   $color = "green";
//   return "color is $color";
// }

// $color = "red";

// echo fillcolor($color); // green
// echo "<br>";

// echo $color; // red


//  // call by referance : &
// function fillcolor(&$color){
//   $color = "green";
//   return "color is $color";
// }

// $color = "red";

// echo fillcolor($color); // green
// echo "<br>";

// echo $color; // green



------------------------------------------------------------ 

Spread operator
######################

 /*


Spread operator : 
لو عندي parameters غير معلوم عددها،  بستخدم ال spread 
كأني بقول للفانكشن اي حاجه تجيلك افرديها ك 
اندكسيز جوا اراي 


*/

    function gettotalprices(...$total){
        return array_sum($total);
    }

    echo gettotalprices(4,6,9,4,3,7,3,466,46);

----------------------------------------------

function as string 
####################

<?php

 /*

--

 Function as string : 


 
 Function as string : 

 ممكن احط اسم الفانكشن جوا فريبل 
 واعمل calling للفريبل ده كفانكشن او بالقوسين ()
 فتتنفذ الفانكشن 

او كاني بعمل calling للفانكشن
ليه ؟  عشان ممكن امررها او احطها جوا فانكشن تانيه 


*/

    function getx(){
        $x = 4;
        return $x;
    }
--
    echo getx();
    echo "<br>";

    $fun = "getx";
    echo $fun();


    ----------------------------------------------

    anonymous function 
    ###############

    <?php 

 /*

      

Anonymous function : 
هي فانكشن مجهوله يعني من غير اسم،  واخرها سيمي كولون ، ويتم استخدمها ك call back function 

array map : 
 بتلوب ع كل عنصر تعمل عليه عمليه  لوحده من خلال كول باك فانكشن 
Parameter : 
Call back function  : ا anonumus or function as string - معناها فانكشن جوا فانكشن
array


*/

  // callback by function as string
  $totalprices = [10,20,30,40,50,60];

  function newprice($price){
    if($price > 30){
        return $price + 50;
    }
        return $price + 10;
}
 //اي فانكشن هتطلعلي اراي جديده هحطها ف فريبل ك container
  $new_array = array_map("newprice" ,$totalprices);


  echo "<pre>";
  print_r($new_array);


  // callback by anonymus function
  // $totalprices = [10,20,30,40,50,60];
  // $new_array = array_map(function($price){
  //     if($price > 30){
  //         return $price + 50;
  //     }
  //         return $price + 10;
  // } ,$totalprices);

  // echo "<pre>";
  // print_r($new_array);

 
  ----------------------------------------------

require & include 
----------------------

<?php 

 /*

Include & require : 
استدعاء ملف او سكريبت جوا ملف اخر 
مثال عملي : هيدر وfooter جوا صفحات الموقع كله 

Path : 
لو جنبه بتكتب الملف زي مهو ex: one. Php
لو مش جنبه : Inc/ one. Php 
"يعني كاني دخلت ع فولدر انك ودوست دوبل كليك واختارت ون "

Include once : 
بستدعيه مره واحده فقط عشان لو نسيت ، ولو كتبته تاتي مش هيستدعيه 

Require vs include : 
ريكوير : لو كتبت اسم الملف غلط هيعملي.fatal error 
وهيوقف الاسكربيت بعديه 
انكلود : لو كتبت اسم الملف غلط هيعملي.warning 
وهيكمل الاسكربيت عادي 

من الاخر : require once بيست براكتس 

جانبيه : 
اhref بتاع footer بتكتب اسم الملف او الاسكريبت علطول 
Practice on php : w3 resources... Exercise

      
*/

echo "hello from test";

echo "<br>";

require_once("one.php");

?>

##################################################

constant
############################

<?php 

/*


اConstant : 
هي شئ ةابت لايمكن تغيره مثل : ان الشمس موجوده 
1+1 = 2 
ومعظم الثوابت مرتبطه بالرياضه 
يعني هو بوكس او صندوق تخزين لايمكن تغييره 

اSyntax :
اconst :  ده يعتبر key word ف اللغه 
+ اسم الفانكشن كابيتل،  ولو كلمتين _ بينهم ...
case sensitive 
ا echo by name of constant 

فانكشن define : ا name كسترينج ،  value 
case sensitive 

      

*/


// const PI = 3.14;
// echo PI;

define("PI",3.14);
echo PI;

?>

----------------------------------------------

operator precedence
######################   

<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Operator Precedence
    - "||" Has A Greater Precedence Than "or"
    - "&&" Has A Greater Precedence Than "and"
  */

//   echo 2 + 4 * 5; // 22
//   echo '<br>';
//   echo (2 + 4) * 5; // 30
//   echo '<br>';

//   echo 10 || false || 0 || [] || ""; // True => 1
//   echo '<br>';
//   var_dump(10 || false || 0 || [] || ""); // True
//   echo '<br>';

  
//   // higher precedence
//   // || has higher precedence from = so : 
//   // بعمل بيب لاين اولا ثم الاسيمنت 
//   $a = 10 || false; // $a = (10 || false) => $a = 1 
//   echo $a; // 1

//   echo '<br>';
//   // or has lower precedence from = so :
//   // بعمل الاسيمنت الاول ثم اور 
//   $b = 10 or false; // ($b = 10) or false
//   echo $b; // 10




/*

 They do the same thing, but && has higher precedence than AND 
(سيمبولز ليها  اولويه اعلي  وكاني حطتها في قوس فبقت معزوله فتتعمل الاول)
     

*/

/*

 && has higher precedence from " = " so : 
  بعمل امبر ساند اولا ثم الاسيمنت     

*/
  
$a = 10 && 11;  // $a = (10 && 11) => $a = 1 
echo $a; //1

echo "<br>";

/*

   and has lower precedence from " = " so :
 بعمل الاسيمنت الاول ثم اند     

*/

$b = 10 and 1; // ($b = 10) and 1
echo $b; // 10

------------------------------------------------------------
number function 
################## 


<?php

// $age = 30;

// echo is_integer($age) . "\n"; // true



// echo is_float($age) . "\n"; // useful in if conditions - false

/*

  
يبقي فلور بتقرب الكسور لاقرب رقم صحيح 
بتبص عالنص 
  يعني من خمسه او خمسه وكسور زي 51 وانت طالع يبقي 6
ولو اقل من 5 زي 49 يبقي 5  كما موضح بالمثال

*/

// echo round(5.51) . "\n";    // 6
// echo round(5.49) . "\n";    // 5
// echo round(5.5) . "\n";     // 6


/*

    يبقي فلور ارضيه يعني بتنزل لاقرب رقم صحيح 
    فمثلا لو 5.99 هتنزله ل 5   

    و سيل سقف يعني بتعلي لاقرب رقم صحيح 
    فمثلا لو 5.01 هتعليه ل 6      

*/

// echo floor(5.1) . "\n"; //5 
// echo floor(5.99) . "\n"; //5 

// echo ceil(5.01) . "\n"; // 6 
// echo ceil(5.99) . "\n"; // 6 


?>

############################################################


MULTIDEMENTIONAL array 
####################


<?php

    /*

        تو ديمنشنل اراي كومون
        تلاته نادره
        والباقي اندر

        الديمنشنل بيتحدد ع اساس الانديكسيز اللي بحتاجها عشان اطبع او اسليكت او اختار فاليو بعينها 
        الديمنشن غير عدد الاراي اللي جوا 
        يعني ممكن تبقي تو ديمنشنل جواها 4 ارايز
    */ 

    // 3 dementional array : bec need 3 indicses to select an element

    $matrix = [
        [1,2,3,[4,5,6]],
        [1,2,3]
    ];

    echo $matrix[0][3][2] . "\n"; // 6

?>

###########################################################



<?php
declare(strict_types = 1); 





//  Write a PHP program to find the larger value from two positive integer values that
// is in the range 20..30 inclusive, or return 0 if neither is in that range



    /*
        return with if : 

        لازم ريترن او ايلس الشرط الاول تبقي برا الاف خالص 
        عشان لو الشرط او الاف كلها متحققتش 
        يخرج برا الاف كلها 

    */ 

    // function find($number1 , $number2){
    //        if(($number1 >= 20 && $number1 <= 30) && ( $number2 >= 20 && $number2 <= 30)){
    //                 if($number1 >= $number2){
    //                     return $number1;
    //                 }
    //                 return $number2;
    //        } 

    //        return "the numbers not in the range : " . $number1 . "/" . $number2; // above

    // }

    // enhancement for code :

    // function find($number1 , $number2){
    //        if(($number1 >= 20 && $number1 <= 30) && ( $number2 >= 20 && $number2 <= 30)){
    //                 return ($number1 >= $number2) ? $number1 : $number2;        
    //        } 
    //        return "the numbers not in the range : " . $number1 . "/" . $number2; // above
    // }


    /*

        ternary operator : 
        ممكن استخدمها ك اف ف حاله ترو وفولس 
        او ف نيستيد اف ل اف 
        زي هنا نيستيد اف 

    */ 

    //      enhancement for code :

    // function find($number1 , $number2){
    //        if(($number1 >= 20 && $number1 <= 30) && ( $number2 >= 20 && $number2 <= 30)){
    //                 return ($number1 >= $number2) ? $number1 : $number2; // above       
    //        } 
    //        return "the numbers not in the range : " . $number1 . "/" . $number2; // above
    // }

    
    // echo find(75 , 80) . "<br>";
    // echo find(26 , 27) . "<br>";
    // echo find(27 , 26) . "<br>";
    // echo find(26 , 26) . "<br>";


    ##############################################################

    // loop from 1 to 100 and display evevn only : 


    // $i = 2;
    // while($i <= 100){
    //     if(($i % 2) == 0){

    //         echo $i . "<br>";
    //     }
        
    //     $i++; // خليتها برا لانها مش معتمده ع اف - لانه ف كل الاحوال هيزود
    // }


    // enhancement for code :

    // $i = 2;
    // while($i <= 100){
    //     if(!($i % 2)){

    //         echo $i . "<br>";
    //     }
        
    //     $i++; // خليتها برا لانها مش معتمده ع اف - لانه ف كل الاحوال هيزود
    // }





     /*

        while - incremanter - odd or even with loop : 
            انا دلوقتي هدفي اني اطبع  الاعداد الزوجيه 
            فده يخليني اولا اعمل ال اي ب 2 

            تاني حاجه اني ممكن اتحكم ف الانكرمينتر براحتي 
            فممكن اخليه ينط اتنين 
            لاني عارف الاعداد الزوجيه 
            انها كل رقمين 

            بدل : 
            ميزود رقم رقم 
            ويقعد يتشك ع اي رقم ب اف 

            البيرفورمينس هيختلف 

    */    

    // enhancement for code :

    // $i = 2;
    // while($i <= 100){

    //     echo $i . "<br>";
    //     $i += 2; // above
    // }


    ##############################################################


      // print in h1

    // $students = ['maged','ali','mohamad','noha','ebraheem','mazen','nadden','ola'];
    // $count = count($students);    
    // $i = 0;


    ##############################################################

 // draw this 

/*
    nested loop and compailor way : 

دلوقتي انا عندي الاي ب واحد 
والاي اصغر من او يساوي 5 
فهدخل جوا 
الجي ب 1  ، 1 اصغر من او يساوي 1
فاليساوي تتدخله جوا ، فيطبع نجمه 
*بعد الطباعه ياتي التزويد او الانكريمنتر * 
فالجي تبقي ب 2 ، و 2 اصغر من او يساوي ال اي 
اللي هي ب 1 ، لا
فيخرج بوا اللوب وينزل سطر 
فيلاقي بريك لاين فينزل سطر ف المتصفح 
ثم يوجع ل I اللوب الاساسي،  فيزود فتبقي ب 2 
و 2 اصغر من او يساوي 5 
فينزل سطر،  والجي تبيقي بواحد 
(ليه ؟ لاني خرجت من اللوب فببداه من جديد ع نضافه او علي الانشيل فاليو اللي هي 1 )
1 اصغر من او يساوي 2 ، فيرسم نجمه 
ويرجع تاني يزود 1 ، ف 2 اصغر من او يساوي 2 
فينزل يرسم نجنه تاني جمبها 
ثم يزود 1 فيبقي 3 
وال 3 مش اصغر من او يساوي 2 
فيطلع برا اللوب وينزل سطر 
فيلاقي بريك لاين فيعمل br ف المتصفح 
ثم يرجع ل اي ب 3 وهكذا 
      

*/ 

// // مثلث - tringle
// for($i = 1; $i <= 5; $i++){
//     for($j = 1; $j <= $i; $j++){
         
//         echo "*"; 
//     }

//     echo "<br>";
// }

// مربع- square
// for($i = 1; $i <= 5; $i++){
//     for($j = 1; $j <= 5; $j++){
         
//         echo "*"; 
//     }

//     echo "<br>";
// }


// // L
// for($i = 1; $i <= 5; $i++){
    
//         if($i == 5){
//             for($j = 1; $j <= $i; $j++){
//                   echo "*"; 
//             }
//         }else{
//             echo "*" . "<br>";
//         }

//         echo "<br>";
// }



##############################################################


// diaplay in table

  // $products = [ 
  //   ["name"=>"product 1","price"=>150,"offer"=>10],
  //   ["name"=>"product 2","price"=>100,"offer"=>10],
  //   ["name"=>"product 3","price"=>200,"offer"=>10],
  //   ["name"=>"product 4","price"=>70,"offer"=>10],
  //   ["name"=>"product 5","price"=>30,"offer"=>10],
  //   ["name"=>"product 6","price"=>140,"offer"=>10],
  //   ["name"=>"product 7","price"=>300,"offer"=>10],
  //   ["name"=>"product 8","price"=>1000,"offer"=>10],
  //   ["name"=>"product 9","price"=>1500,"offer"=>10],
  // ];

  // $count = count($products);


  ##############################################################



  // typehint :
  
  /*

      
    type hint : 
    ممكن استخدام mixed : 
    عشان اقوله اقبل اي نوع بيانات ومشتغلش ذكائك،  بكلم المومبلير 

يبقي من غير strict type : 
    الكومبيلر 
 بيعامل type hinting زي ايكولتي 
يعني لو القيمتين متساويين في الفاليو اشطا عديها 
مش لازم data type
 مثل : "5 " يعديها لو انت محدد int في الفانكشن يدخلك 
لكن عشان اخليه يعامل الداتا معامله identical 
يعني لازم data type & value  يبقوا متساويين 
فمثلا "5" هيديني فيها fatal error لانها متساويه مع int كقيمه ولكن ليس ك data type 
لازم بعمله strict type 

يبقي عندنا 3 انواع syntax جوا الفانكشن لتحديد نوع البيانات ، 2 type hinting ، ا واحده type casting عموما مش جوا الفانكشن بس 

لو بارميتر جوا الفانكشن : int 
لو return : ا كولون ثم int 
: int 
لو في البلوك اوف كود او جينرال سكوب : 
(Int)

    */ 

  // function add(mixed $number1, $number2){

  //       return $number1 + $number2;
  // }

  // echo add("5.5",15); // 20.5



  // function add( int $number1, int|float $number2) : int{

  //       return $number1 + $number2;
  // }

  // echo add(15,15.5); // fatal error

  // //solution
  // function add( int $number1, int|float $number2) : int{

  //       return (int) ($number1 + $number2);
  // }

  // echo add(15,15.5); // 30 - لانه حولها


  ##############################################################


  // anonumus function : 

  /*

          
        Anonymous function : 
        هي فانكشن مجهوله يعني من غير اسم،  واخرها سيمي كولون ، ويتم استخدمها في حالتين : 
        1- اعملها اسين لفريبال،  لانها ف الاخر بتؤول الي قيمه هخزنها في فريبل 
        2- ك call back function : 
        يعني فانكشن بتنادي ع فانكشن او فانكشن جوا فانكشن 


    */ 

  // function(){
  //     echo "hamada";
  // };


  /*

      لو هتحط variable
      من غير متعمل كونكتنيشن 
      وعايز تميزه حط كيرلي برسيز فقط 
      لانها مش هتتطبع 
      لكن بارنسيز وسكوير براكتس هيطبعوا

    */ 

  // $x =   function($name){
  //     echo "hamada {$name}"; // above
  // };

  // $x("abdo");


  ##############################################################

  // arrow function : 

  /*

        
        arrow function : (shorthand for anonumous function )

        هي عباره عن syntax sugar 
        او shorthand 
        للفانكشن البسيطه اللي مثلا فيها ريترن واحد 
        وبتبقي سطر واحد 

    */ 

  // $x = fn($item) => $item + 5;
  // echo $x(6); // 11


  ##############################################################

  // array map : 

  /*

                        
          array map : 

          بناخد كل عنصر من عناصر الاراي تطبق عليه فانكشن
          وبتاخد اراي واحده او ممكن مجموعه arrays 

          بتلوب ع كل عنصر تعمل عليه عمليه  لوحده من خلال كول باك فانكشن 

          Parameter : 
          1- Call back function  : ا anonumus or function as string - معناها فانكشن جوا فانكشن
          يعني من الاخر فانكشن 
          2- array


    */ 

  // $numbers = [1,2,3,4,5];  

  // $x = fn($item) => $item + 10; // callback function 
  // $new_array = array_map($x , $numbers); // assign in new variable bec of print r to be readable

  // echo "<pre>";
  // print_r($new_array);




        


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> bootstap demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>



      
              <!-- 
                  incrementer - $i++ : 
                  من الممكن اختصار خطوه الايكو و الانكرمينتر 
                  ف خطوه واحده او دمجهم مع بعض : 

                  باني اطبع الاي  بالبوست انكريمينت 
                  فهيطبع الاول ثم هيزود 
                  فمفيش قيمه هتقع مني 

              -->

             
            <!-- <?php  while($i < $count) : ?>
            <h1> <?php  echo  $students[$i++] ; //above ?></h1>
            <h1> <?php endwhile; ?></h1> -->

            ##############################################################

            <!-- 
                                يبقي مالتي دامينشل بتطبع اي عنصر فيها عن طريق الطول ثم العرض 
                  يعني مثلا : array of 0 of 1 : زيرو ده طول،  و 1 عرض 
                  ف التابل طول يعني tr ، وعرض td 
                  انظر للمثال للفهم 

                  لو ف حاجه مش متأكد منها وعايز تجرب ،  ابدا جرب بحاجه واحده بسيطه 
                  مثل هجرب الاول ب tr and td
                  واحده ثم هجرب الباقي 

                

             -->

<!-- 

            <div class="container">
        <div class="row">
                <div class="col-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Offer</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php for($i = 0; $i< $count; $i++) : ?>
                                <tr>

                                    <td> <?php echo $products[$i]["name"]; ?></td>                                   
                                    <td> <?php echo $products[$i]["price"]; ?></td>                                   
                                    <td> <?php echo $products[$i]["offer"]; ?></td>                                   
                                                                     
                                </tr>
                                <?php endfor; ?>

                            </tbody>
                        </table>
                </div>
        </div>
</div> -->

                  





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>












############################################################### 


practice on basics - php part 1 
#################################

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> bootstap demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1> Hello World! </h1>

    <!-- 


    
Cli : command line interface 

تركات ف الحل التفكير : 
قسم مسائلتك،  تقراها كلها ع بعضها 
وقسم ف الحل قبل وبعد and ، حتي اللي قبلها وبعده قسمه ،  وجرب تنفذ من غير الشرط ثم الشرط 

ابدا ف الاول بابسط حاجه ستاتيك صغيره
(حتي لو هو عايزها دينمك)

ابدا باول خطوه ومتشغلش بالك باللي بعد كده

Terminal : 
1- Cd : change directory.. Double click
Ex: cd practice 
2- Php 1.php : اسم اللغه + الباث بتاع الملف كامل

الكوماندلاين لايفهم br ، ولكن يساويها عنده /n ". backslash" 

وانت بت inject code ف html : 
عود نفسك ع sugar syntax..  End if and loop 

اRand : خلي ال end اكبر من start
Ex: Start : 1,20. End : 30,40 

     -->


<!--
   <?php 


// write a script to add all the integers between 2 random numbers and display the sum if the numbers is not odd.

//contain : 
// loops
// operators
// variables
// conditions

//algorithm : 
// 2 numbers ( 1, 20 ) "start static"
// loop from 1 to 20
// print numbers
// get sum
// check by if
// rand the operation

$sum = 0;
$start = rand(1,10);
$end   = rand(20,30);
for($i = $start; $i <= $end; $i++){
    if($i % 2 == 0){
       echo $i . "<br>"; 
       $sum = $sum + $i;
    }
}


echo "start : $start ";
echo "<br>";
echo "end : $end ";
echo "<br>";
echo "sum : $sum ";





 ?>
  -->



<?php 


$sum = 0;
$start = rand(1,10);
$end   = rand(20,30);

?>

<?php for($i = $start; $i <= $end; $i++): ?>

<?php 
  
    if($i % 2 == 0) :
       echo $i . "<br>"; 
       $sum = $sum + $i;
    endif;
?>

<?php endfor; ?> 

<h1><?php echo "start : $start ";?></h1>
<h1><?php echo "end   : $end ";?></h1>
<h1><?php echo "sum   : $sum ";?></h1>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

------------------------------------------------------------------------------
practice 2
###############  


<?php
declare(strict_types = 1);

/*

  يبقي ممكن تطبع جزء من الاسترنج كاراي،  لان كل كراكتير او حرف متخزن لوحده ف الميموري كاراي 
وممكن تلوب ع الاسترنج كاراي عادي 

لو هتلوب ع الاسترنج كاراي : 
Cond : i < length (like count in array array)

يتم استخدام الdecrement ف العد التنازلي 

اعمل return براراللوب يكون خلص اللوب كله 

ا shortcut assighment operator : 
لو الحاجه هتعيدها الناحيه التانيه،  استخدمها 
عمليات حسابيه ،  conctnation 
Ex : x .= y 
    

*/


$string = "eraasoft";

// echo $string[2];
// echo "\n";

function revstr(string $string){

   $i = strlen($string) - 1 ;
   $revstr = "";

   while($i >= 0){
      $revstr .=  $string[$i];
      $i--;
   }

   return $revstr;
}

echo revstr($string);
// echo revstr(3456); // fatal error
// echo revstr("3456"); // type juggling - ok
// echo revstr(ahly);


##############################################################


<?php


// $test = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam laborum recusandae dignissimos enim ad, maiores eos minus quis error ea, ab perspiciatis quam quos et distinctio, impedit alias illum ipsum.
// ";


// ucwords 
###########################


/*

        بتخلي اول حرف من كل كلمه كابيتل 

*/ 
// echo ucwords($test); 

##############################################################


// trim : 
###########################

/*

          trim : 
    بتشيل الزاويد او الوايت سبيس،  يعني المسطره من الاخر 
    من يمين وشمال الاسترنج 
    او من بدايه ونهايه الاسترنج 
    ولكن مبتشلش من الاسترنج نفسه او في نصه 
    "ممكن كمان تشيل من يمين بس او شمال بس "
    "لو عايز اشيل من نص الاسترنج كمان ، ممكن استعمل str replace واشيل يمين وشمال ونص "


*/ 

// without trim 
// $name = "    abdo    ";
// echo strlen($name); // 12

// with trim :trim right and left
// $name = "    abdo    ";
// $name = trim($name);
// echo strlen($name); // 4

//trim all string 
// $name = "    ab do    ";
// $name = str_replace(" ","",$name);
// echo strlen($name); // 4


##############################################################

// find or search : strpostion vs str contains : 
###########################


// echo str_contains($test , "ipsum"); // 1
// echo strpos($test , "ipsum"); // 6 - اندكس اول حرف
// echo str_contains($test , "eraasoft"); // 0 - مفيش


##############################################################

//global 
###########################

/*

      
Global : 
1- يبقي دلوقتي الفريبلز عندها 2 scopes : 
Global scope : 
الفريبل متشاف ف السكريبت كله 
Functions scope : 
الفريبل متشاف جوا أقواس الفانكشن بس 

2- لو عايز امرر فريبل للفانكشن لو كتبته بين البارسنيز 
يعني بقوله استني بارميتر او فريبل من جلوبال سكوب او من برا الفانكشن ومتبصش جوا 

لكن لو سيبت البارنسيز فاضيه يعني هيبص جوا وهيستني من جوا الفانكشن سكوب البارميتر او الفريبال فلازم اديهوله جوا اقواس الفانكشن 

طب لو عايز اسيب البارنسيز فاضيه واستخدم فريبل من جلوبال سكوب 
بعمل مثلا : 
Global $name 
يعني استخدملي الفريبل اللي اسمه نيم ووضعه جلوبال 
فكده بقي يخص الفانكشن 
يعني كاني كتبه جوا الفانشكن من الاخر 
يعني تستخدمه في استدعاء الفانكشن 
وتأثر عليه يعني ناتج الكول هيعمل اوفررايد عليه 
 

طب ليه يعم مدهوش الفريبل او بارميتر بين البارسنيز او اقواس البارميتر وقوله استناه من بره؟  
لان كده هيبقي call by value 
ومش هعرف اثر عليه 
يعني كاني باخد منه كوبي بس 
واي عمليه هتم ع الكوبي مش هتأثر علي الاصل 
لكن لو عملت جلوبال او call by reference 
يبقي هأثر عليه يعني ممكن اعمل override 

يعني من الاخر global 
طريقه عشان ادخل فريبل من جلوبال سكوب 
لفانكشن سكوب 
يعني كالمثال الموضح كاني دخلت او كتبت 
$name = abdo 
جوا الفانكشن 

من وحهه نظري فرق بين جلوبال و باس باي ريفرنس : 
جلوبال : مش بمرر بارميتر وبأثر 
باي ريفرنس : بمرر بارميتر وبأثر 

    */ 

// $name = "abdo";

// function getName(){

//     $name = "ali";
//     return $name;

// }

// echo getName(); // ali
// echo "<br>";
// echo $name; // abdo


// global : 

// $name = "abdo";

// function getName(){

//     global $name;    
//     return $name;

// }

// echo getName(); // abdo
// echo "<br>";
// echo $name; // abdo


// global with override : 

// $name = "abdo";

// function getName(){

//     global $name;
//     $name = "ali";    
//     return $name;

// }

// echo getName(); // ali
// echo "<br>";
// echo $name; // ali

##############################################################

// super global varaibles
###########################

/*

     Super globals   Variables: 
هي فريبل جلوبال مدهالك اللغه بقدرات خارقه 
او قدرات مميزه عشان تساعدمةفي المشروع بتاعك 
والمشترك. بينها : 
1- كلها بتبدا ب
$_ 
ماعدا العاق globals 

2- كلها عباره عن associative array 
وكلها كابيتل 


    */ 

    ###########################

    // global vs globals
    ###########################

//     $x = 10;
    
//     function getX(){
//         global $x;
//         $x = 50;
//         echo $x;
//     }

//     echo $x; // 10 - before calling
//     echo "<br>";
//     getX(); // 50
//     echo "<br>";
//     echo $x; // 50 - aftere calling

    ###########################

    // globals 
    ###########################

    /*

      1- globals : 
بيأدي نفس الوظيفه بتاعه الكي ورد global 
واحنا غالبا بنستخدم global  


    */ 

    ###########################


//     $x = 10;
    
//     function getX(){
//        $GLOBALS["x"] = 50;
//        echo $GLOBALS["x"];
//     }

//     echo $x; // 10 - before calling
//     echo "<br>";
//     getX(); // 50
//     echo "<br>";
//     echo $x; // 50 - aftere calling

##############################################################

// server
###########################

/*

      2- server : 

بيشيل شويه معلومات عن السيرفر وعن client 
مثل : ip ، root,  qury ، url,  os
بتستخدمها حسب حاجتك 
مثل : عايز ابلوك ip معين 
او عايز اللي يدخل الموقع مستخدمين ويندوز فقط


    */ 

//     echo "<pre>";
//     print_r($_SERVER);


###########################

// print test from url (file name : test.php)
// لتحسين الكود يمكن الاستغناء عن برينت ار وايكو كلها ماعدا الاخيره ولكن ده للتوضيح

// $url = $_SERVER["SCRIPT_NAME"];
// echo $url;
// echo "<br>";
// $url_array = explode("/" , "$url");
// print_r($url_array);
// echo "<br>";
// $page_name = explode("." , $page_name );  // echo $page_name = end($url_array);  // echo $url_array[coun($url_array)-1]; - another way
// print_r($page_name);
// echo "<br>";
// echo $page_name[0];

##############################################################








?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> bootstap demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>



  <!-- 

  
For each : 
enhancement from php 
عشان الوب ع حاحات itrable جوا php 
زي ال array & object 

اكتر لوب هتستخدمها ف php هي for each 

الفور ايتش مصمم مخصوصا ل associative array 
واصلا اصل كل ال arrays 
هي اسوشيتيف اراي 
حتي  indexed
  بيعتبر اندكس هو الكي 
والقيمه هي الفاليو 
و multidementional 
الكي هو راي 
والفاليو هو قيمه جوا الاراي 

ممكن ف الفور ايتش اطبع ال key او value فقط 
مثلا : 
Array as value 


end : 
بتجيب اخر عنصر في الاراي 
end or last element in array 

   -->

<!-- 
        <div class="container">
                <div class="row">
                        <div class="col-12">
                                <table class="table table-bordered">
                                <thead>
                                        <tr>
                                        <th>#</th>                              
                                        <th>key</th>                              
                                        <th>value</th>                              
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach($_SERVER as $key => $value): ?>

                                        <tr>
                                        <td> <?php echo $i++; ?></td>                                   
                                        <td> <?php echo $key; ?></td>                                   
                                        <td> <?php echo $value; ?></td>                                   
                                
                                        <?php endforeach; ?>

                                        </tr>
                                </tbody>
                                </table>
                        </div>
                </div>
        </div> -->



          <!-- get :
########################### -->

/*

data : 

Url : 
Query string : 
بتبدا ب؟  
وبتبقي شايله معلومات عايز ابعتها للسيرفر 
وبتبقي عباره عن assocuative array 
Key and value 
والمي ثابت،  لكن الفاليو بتتغير 
وبفضل بين معلومه والتانيه او كي وفاليو والتاني ب &
مثل هعمل لوجن في الفيس 
؟ Id = 5 & username = ghhh
وهكذا اي حاحه مش sensitive 
فالكويري 



دلوقتي عشان تبعت بيانات من خلال http ، عندك. طريقتين : 
1- من خلال url 
ب method : get 
2- من خلال request body 
ب method : post 

طب هستقبل البيانات ازاي : 
اول بوابه ليا هي ويب سيرفر web server 
والويب سيرفر هيوصل المعلومات ل php 
طب php 
هتستقبل المعلومات ازاي؟  
عن طريق سوبر جلوبال فريبال 
Get  : لو انت باعت ب جيت
Post : لو انت باعت ب بوست 
يعني لو عملت print r للسوبو جلوبال فريبل ف السكريبت اللي هي land و عليه هتلاقي البيانات 

يعني من الاخر ببعت اي بيانات بميثود جيت او بوست 
وبستقبلها لسوبر جلوبالوفريبل جيت او بوست 

يعني ال user 
بيبعت الداتا من خلال form 
واتا بستبقبلها من خلال post or get 
والعب عليها براحتي 

يبقي بعت ازاي من خلال url : 
اول حاحه بكتب الاسكريبت اللي ه land 
عليه او هبعتله 
تاني حاحه. ؟  + key = value 



    */ 

<!-- above -->
<!-- <a href="show.php?id=50&name=Abdo" class = "btn btn-info">Send Data</a>  -->

<!-- <?php

// make page another show.php to see the data 
print_r($_GET);
echo "<br>";
echo $_GET["id"];
echo "<br>";
echo $_GET["name"];

?> -->



<!-- 

// send data from url 
###########################

// <a href="show.php?n1=50&n2=50&op=plu " class = "btn btn-info">Send Data</a>
// <a href="show.php?n1=50&n2=50&op=min " class = "btn btn-info">Send Data</a>
// <a href="show.php?n1=50&n2=50&op=mul " class = "btn btn-info">Send Data</a>
// <a href="show.php?n1=50&n2=50&op=div " class = "btn btn-info">Send Data</a>

###########################

// send data frpm form 
###########################


<div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="show.php" method="get">
                    <div class="mb3">
                        <input type="number" name="n1" class="form-control" >
                    </div>
                    <div class="mb3">
                        <input type="number" name="n2" class="form-control" >
                    </div>
                    <select name="op" class="form-control" >
                        <option value="plu">plu</option>
                        <option value="min">min</option>
                        <option value="mul">mul</option>
                        <option value="div">div</option>
                    </select>
                    <div class="mb3">
                        <input type="submit" value="send" class = "form-control btn btn-success" >
                    </div>
                </form>
            </div>
        </div>
     </div>  -->

<!-- 
        Case : 
ممكن احط جواها اكواد كتير 

مينفعش تبعت + ف url 
لان لبها اكشن معين 
فالبديل لو بتعمل اله حاسبه وبتبعت ب get 
خليها plu 

 -->

     <!-- <?php

     // make page another show.php to see the data 

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$op = $_GET["op"];

echo $n1 . $op . $n2;
echo "<br>";

switch($op){
    case "plu":
        echo $n1 + $n2;
        break;

    case "min":
        echo $n1 + $n2;
        break;

    case "mul":
        echo $n1 + $n2;
        break;

    case "div":
        if($n2 != 0){
            echo $n1 + $n2;
        }else{
            echo "canot divide by zero";
        }
        break;

    default : 
        echo "el3b b3eed yalla";    

}


?> -->






          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>


##############################################################

متفرقه 
###########################


/*

يبقي الاسترنج بيتخزن sequential 
او تتابعي 
لان اي مكان ف اليموري بيشيل حاجه واحده 
بس اللغه بتخزن الحاجات دي ف الميموري تتابعيه 
اي ورا بعضها زي الاراي 
او بتضغطهم ورا بعض 
ايوه ، يعني الاسترنج اصله array 

لو بكتب اي كلمه مكونه من كلمتين بفصل بينهم ب _
مثل : first_name 

تنطق اس تي ار وليس ستر 

وانت بتكتب الفانكشن  وخاصه بتوع الاسترنج - عشان مشكله عدم وجدود stander في الكتابه 
جرب اكتب الحزء الاول
وشوف اقتراحات vs 
لو لقيتها تمام 
لو لا حط _




    */ 


    ##############################################################

    validation - santization - session - redirection 
    ###########################

   

    <?php
    session_start();
    
    /*
    
          security : 
    
    Validation  : 
    مثال : 
    دلوقتي انا لو عامل فورم بمثود جيت POST 
    والمفروض هستقبلها ب سوبر جلوبال فرييل جيت 
    طب افرض واحد قرر يلعب ف المتصفح ويغير ميثود ويخليها بوست !!
    ما اتا لازم اعمل حسابس ع اسوء الاحتمالات واحلها 
    طب الحل :
    هتعمل validation لل data بتاعتك 
    يعني هعمل ايه؟  
    هتعمل تشيك بربع جنيه ب if 
    وهتستغل سوبر جلوبال فريبل Server
    وتتشيك علي  : request method 
    
    
    يبقي validation ودي حاجه في " security " : 
    هو ان. الداتا اللي تجيلك. يبقي هي اللي انت مستنيها 
    مثل : مستني والبيانات تتبعت بطريقه جيت POST 
    او عندي field in form نوعه نمبر فمستني يجيلي نمبر وهكذا 
    يعني لازم اتأكد او اتشيك ان اي داتا جايه تبقي زي ما اتا متوقعها 
     الكلاينت او اليوزر مش بيبعت بمزاجه 
     
    
    خلي الفاليد او التشيك ب ورست كيس سيناريو 
    worst case senrio 
    يعني تشيك بنوت!
          ليه : 
    1- مختصره 
    2- بكتب حاجه واحده بس 
    مثال : 
    لو هتشيك علي ان النمبر اللي بيتبعت م الفورم انه يبقي نمبر او از نيوميرك : 
    هقله اف نوت از نيموميرك 
    قوله العب بعيد يلاه او اكتب رقم vaild او اي حاجه 
    بدل مكتب لو نيوميرك قوله كذا.
    ولو لا ايلس كذا 
    انظر للكود تحت
    
    
    
    اsanitization  : 
    
    يبقي قبل ال validation بعمل sanitization 
    طب ايه هو : 
    هو التعقيم او الفلتره او الترويق علي الداتا اللي جيالي 
    عشان تبقي علي الشكل اللي اتا مستنيه 
    ولو هي خلاف ذلك او غير كده متضرنيش 
    مثل : Html entities ، trim 
    
    يبقي الترتيب في التعامل مع الداتا اللي جيالي 
    عشان ال security وكده : 
    
    1- ا valid for method: بستقبل الداتا 
    اه valild الداتا اللي جايه ديه جيت ولا بوست 
    
    2- ا sanitization for input : بعقمها 
     ا santization للداتا دي 
     
    3- ا valid for input : بعمل فاليد ليها 
    فاليد للداتا دي او input 
    
    في اي valid لو داتا مضروبه او مش زي اللي اتت عايزها 
    طلع رساله ايرور واعمل die 
    
    
    
    
    side note : 
    
    Die : 
    بتوقف الكود عند السطر اللي انت كتبته فيها 
    يعمي مثاا لو كتبتها في السطر 14 
    السكربت بتاعي هيبقي لغايه السطر 13 
    
    
    is numeric : 
    بتتشك لو القيمه دي number  or numeric string 
    يعني بتتشك علي فاليو وليس نوع الداتا 
    يعني اي رقم مثل : انتيجر او فلوت او سترنج هتقبله
    
    
    Html entieties... Html specialchars : 
    يعني كل التاجات. والحروف في html 
    ليها ترميز بالاسم او الرقم او مايسمي 
    entity name or number 
    مثل : < : &nsp وحاجات كدا 
    ميزته ايه : 
    المتصفح بيفهمه وممكن اخزنه عندي في database كداتا ، من غير مايضرني
    ده لو اتا حابب اتيح ده
     او عشان لو حد فكر يلعب في الموقع بتاعي باسكريبتات قرصنه 
    
    
    
     اي ويبسايب هيبقي فيه فورم وهيبقي فيه validation فهي ثابته معايا 
    
    يبقي الفالديشن بتاعتي بتبقي حسب العميل او البيزنس محتاج ايه : 
    مثل : اسم مستخدم. اكتر من 3 حروف وكده؟ 
    
    يبقي فاليد بتاع input او الداتا اللي جايا : 
    1- ورست كيس سيناريو ب اف نوت ، يعني طباعه في حاله فولس
    2- اdie 
    
    اي تشيك ع الداتا اللي جايا : 
    1-ا data type :  ا is string ، ا is numeric
    3- !empty
    2- ضمن الحاحات اللي اتا حاططها او متوقعها ولا : 
    Search like in array or str contains 
    
    Get vs post : 
    جيت : الداتا بتتبعت خلال url 
    بوست : الداتا بتاعه خلال body of request 
    وبيكون معمولها تشفير او encryption 
    
    
    اي داتا sensitive بستخدم post مش get 
    
    اي سطر بيتكرر في السكربيت بتاعك 
    مع اختلاف حاجه مثل : operator,  number 
    اعمله فانكشن احسن ومرر الحاحه دي ك parameter
    مثل هنا : بعمل نفس السانتيز ل n1 , n2 , op 
    خلاصث اعملهم فانكشن واخلص 
    
    خزن الايرورز في مستودع واعرضها كلها مره واحده
    ليه ؟ 
    عشان يعرض الغلط له مره واحده فاليوزر يصلحه كله مره واحده وهكذا 
    هنعوضها ازاي؟  هتعمل لوب ونعرضها كلها من خلال for each 
    لانه الايرورز عباره عن اراي 
    وعشان اعرض الاراي تحت بعض بشكل readable 
    مش بشكل print r جنب بعض 
    لازم اعمل ايكو لكل عنصر ف الاراي 
    وده تكرار نمطي له بدايه ونهايه وانكرمينتر ثابت 
    فهعمله بلوب وغالبا ف php بستخدم foreach
    وبعرض الكي او الفاليو او الاتنين مع بعض براحتي
    
    وكل تشيك هيظهرلي منها ايرور واحد لو هي اكتر من شرط او اكتر من ايرور يعني اف وايلس ايف 
    لانه اردي الكلاينت غلط وظهرلي ايرور واحد فمحققش اف فمش هيدخل علي ايلس ايف ، مش حصاله هي بتجمع فيها 
    وهكذا لغايه ميكملك كل الايرور ويوقفلك الكود ب die
    
    
    خلي كل validation لوحدها متجمعش كله ع بعض 
    فمثلا : فالزيشن n1 لوحدها 
    وهكذا n2 
    
    لو اليوزر بعت فيلد فاضي field 
    هيتبعتلي كسترنج فاضي 
    لان الداتا بتجيلي كسترنج 
    بعني هيجلي داتا من الاخر حتي لو هو مبعتش حاجه
    
    
    Include & require : 
    فانكشن تستدعي ملف بالكونتينت بتاعه جوا ملف 
    
    Path : 
    لو ع نفس اللاين  ، يعني يعتبر جنب بعض 
    مثل فولدر pages وجنبه فيل سرفسيس 
    يبقي :
    Foldername / file 
    Ex : pages/home. php
    
    طب لو محتاج تطلع من فولددر عشان تدخل ع الباث اللي عايزه : 
    ../ Foldername / file
    ex : ../inc/hamada.php
    
    
    
    Request : 
    حاجه بتقوم بوظيفه get & post في نفس الوقت.
    يعني الداتا اللي جيالك جيت او بوست تقدر تستقبلها بيه 
    ولكن غير recommended استخدم جيت او بوست احسن 
    
    
    session : 
    
    نظري : 
    
    مفيش مشروع مفهوش سيشن 
    ومفيش مشروع مفهوش اداره حاله وبياتات ل users 
    State management او 
    
    
    عايز احفظ المعلومات عن اليوزر اللي داخل
    واتحرك بيها ف كل السكريبتات واي url عندي ف الويبسايت
    يعني من الاخر عايز احفظ معلومات واتحركها بيها في كل السكريبتات 
    يعني اعرف استدعيها علطول قي اي سكريبت
    الحل؟  
    مستودع او مخرن  او صندوق ع السيرفر هخزن فيه الداتا
    اي يوزر يدخل عندي هعمله unique id
    زي بطاقه ، يخش بيه
    واول ميجي يدخل عندي هخزنله فايل بيونيك Id 
    فمثلا احمد ومصطفي داخل 
    اعمل لكل واخد ملف بيونيك id 
    
    مثال اخر : 
    هنعتبر الويبسايت زي البيت 
    فاتا عندي صندوق ف مكان ثابت "السيشن"
    واليوزر ممكن يدخل من اي حته ف البيت او الويبسايت 
    واي معلومات هيعوزها هجيبها من الصندوق وهديهاله
    
    
    مثال البنك : 
    لو روحت لاي فرع هقدر اجيب حسابي
    لان حسابي موجود ف مكان كل البنوك تقدر توصله 
    فاول مروح بديله رقم البطاقه اللي هو يونيك id 
    فيقدر يقولك معلومات عن حسابك مثل : فلوسك واخر عمليه سحب 
    والمعلومات دي موجوده centralized 
    او مركزيه 
    كل فروع البنك تقدر توصلها
    فلو دخلت لاي فرع هتعرف توصل لحسابك
    وممكن كمان تعمل ايداع ع حسابك من اي فرع 
    وتروح بعديها بكام يوم اي فرع تاني فيقولك عمليه الايداع اللي انت عملتها.
    ولكن 
    في شويه شروط او تعليمات عشان تعرف تعمل ايداع في البنك وتتعامل فيه مش هتروح تقولهم عايز فلوس وخلاص  : 
    مثل : تعمل حساب 
    و يتعملك verification 
    واتأكد ان سجلك الاجرامي والمالي نضيف
    
    يبقي هي مثل داتا بيز، 
     السكريبتات بتشاور عليها 
    وبتعمل معاها ايداع بيانات واخذ بيانات 
    
    داتا سنتر موحود عندي ع السيرفر اقدر اخزن فيه او اجيب منه معلومات  
    
    يبقي اتا ب store data in session 
    وب get data from session 
    
    عملي : 
    
    يبقي هي عباره عن associative array 
    وهي super global varaible 
    
    تعليمات او سنتاكس السيشن : 
    انك لازم تكتب في اول سطر ف السكريبت
    session start 
    عشان يسجل الحاجه دي عنده في السيرفر 
    سواء بت store date 
    او ب get data 
    
    مثال عملي : 
    صفحه لوجن والبروفايل 
    صفحه لوجن : بيستارت فيها سيشن عشان ي store data بتاعتك
    وصفحه بروفايل : بيستارت فيها سيشن عشان ي get data بتاعتك من السيرفر
    
    بسبب سيشن ممكن تلوجن من اي جهاز عندك مثل : كمبيوتر ولاب وتليفون ، مش هيقول لا 
    
     session start to store info: 
    عرفتها اني هستخدمها "سيشن"
    و.هعمل ملف ببيانات البوزر اللي داخل دلوقتي 
    وقولته خزنلي مثلا : كي اسمه نيم وفاليو اسمه حماده
    
    ممكن استعرض او get داتا بتاعه سيشن 
    في نفس السكريبت او سكريب تاني 
    
    هيحصل ايه لو فتحت صفحه جيت انفورميشن قبل ستور انفورميشن في السيشن
    او صفحه البروفايل قبل لوجن ؟ : 
    هيحصل ايرور 
    كاني بقوله هاتلي داتا من السيشن اللي مخزنتش فيها داتا اصلا
    بدليل انك. متقدرش تدخل ع اي ويبسايت الا لما تعمل لوجن الاول 
    ولما بتعمل لوجن هو بيكريتلك سيشن 
    عملي ع النعلومه دي : 
    يبقي لما تروح ع اي url هو بيتشيك ع السيشن لو موجوده بيعديك 
    لو لا بيقولك لازم تعمل لوجن الاول عشان يكريت سيشن
    فلنا تعمل لوجن واتاكد انك عندي هدخلك
    
    يبقي فكره السيشن اني تقدر اشير الداتا من خلال الموقع بتاعي كله بشرط اقوله سيشن ستارت اول سطر 
    ثم اخزن زي ما انا عايز واستدعي ك assotiative array 
    
    طب لو عايز امسح داتا في سيشن؟  
    مثل : صفحه او سكريب logout 
    هتعمل سيشن ستارت 
    ثم session destroy 
    ثم لو رجعت ل لوجن تاني هيبدا سيشن جديده 
    ثم لوج اوت هيدمر السيشن ويحذفها 
    وهكذا
    
    
    
    Redirections : 

مثال : الفيس لو عندك ايرور او حاحه غلط في الفورم. بيرحعك لنفس الصفحه ولا صفحه تانيه بيضه لوحدها زي ماانت عامل في show.pho ؟  
لا بيرجعك لتفس صفحه الفورم 

والحل ؟ 
انا بيبقي عندي صفحه لوجيك بس ...مثل : Show.php 
لكن الداتا والارسال،  وحتي للسويتش 
الصح فيهم انك بترجع الداتا او النتيجه علي نفس صفحه الفورم 
من الاخر كانك بتعمل باك back عشان ترجع علي نفس url بتاع الفورم
"مثل من show.php ل data.php"
بس بالكود 

طب ازاي؟  

بعمل بيلت ان فانشكن هيدر 
 header : location
 
 بتعمل redirect او اعاده توجيه للباث اللي هحطه 

عملي : هبعت الايرورز ع الباث ده 

طب دلوقتي عندي مشكله : 
هو ان الايروز بتظهر في سكريبت لوجيك اللي هو
 show. php 
 وانا عايزها تظهر في صفحه الفورم 
 ايه الحل؟  
 عايز حاجه تخزنلي الايرور في  show
 وتعرضهالي في data. php.. اللي هي صفحه الفورم 
 الحل هو session 




--_-----------------------------


** Side note : 

In array : 
بتسرش علي نيدل او قيمه معينهم وجوده في الاراي ولا
وبترجع ترو او فولس 
نيدل او needle : 
لو كتبته فريبل يبقي بسرش بقيمته جوا الاراي وليس بيه هو 


اي فانكشن سيرش يبقذ needle & haystack 
الابره وكومه القش 
واي فانشكن exist or not بترجع ترو وفولس 

عشان العب في اكواد المتصفح او brwoser 
بتضغط ع حاجه اللي عايز اعدلها بالماوس وبكتب 
ولو عايز اعمل كوبي وازود حاجه مش اعدل بس 
بعمل edit as html 

ممكن لو عايز اعدل ع ملف في vs واحفظ القديم 
بعمل للملف في side bar of vs 
كنترول سي وكنترول في


الفرق بين الفانكشن واللوب في التكرار : 
الفانكشن كما ذكرنا السطر السابق 

اللوب : تكرار له بدايه ونهايه و counter ثابت بواحد
مثل : زودلي ع كل عنصر 5 
او عد من 1 ل 10 
او اعرضلي الاراي دي 


Alt + سهم in vs : 
بيعدي بالحاحه او بينقلها من خلال اللينات او سطور الكود 
مةل لو عندي n1 وتحتيها n2 
بحدد n1 وبعدي بيها من n2 
من غير كوبي وبيست copy & paste



empty : 
بتتشك الفريبل بتاعي فاضي ولا
" اللي نوعه mixed يعني بيتشتغل مع جميع انواع البيانات زي الاسترنج والاراي " 



Start session : 
بتبدا او بتكمل سيشن،  بتبدا جديده وبتكمل قديمه 
Start or resume session 

Session desyroey : 
فانكشن لتدمير كل الداتا في السيشن كانها متحفظتش 



Path : 
لو الصفحه جنب الصفحه بكتب اسم الفحه بس 
مثل : صفحه داتا و شو جنب بعض 
فلم اكتب باث هيبقي show.php مثلا


ممكن اخزن جوا session 
قيمه اراي 
يعني عندي كي و فاليو اراي 
كانها multi dementional 

ازاي تحل اي مشكله برمجيه 
لو شيت واقف معاك 
problem solving 
ازاي افكر واحل المشاكل : 

يبقي اول حاجه اعمل identify للمشكله هو ايه مشكلتي بالظبط؟  
مثلا هنا : 
عايز اخزن الداتا في سكريبت واعرضهاوفي سكريبت تاني او الايرور ف اسكريبت واتا عايز اظهرها تو اعرضها. 
ف صفحه تانيه او سكريبت تاني 

فمثلا طلعت بالحل سيشن 

تاني حاجه : كسر مشكلتك لحاجات صغيره واللي تعوفه اعمله والدنيا هتفتح معاك واللوجيك هيجب بعضه .وفاليد وشوف كل خطوه 
عشان لو في غلط تدور في حاحه واحده 
احست متدور في كذا حاجه 

 بمعني دلوقتي هعمل سيشن فهخزن الاول 
 ثم هعرض 
 طب الاول وريلي التخزين؟  
 ثم نعرض؟  

نصائح اخري : 
ابدا بحاجه صغير جدا ستاتيك 
وفاليد وشوف 
ثم حسّن وشوف. وهكذا 

حته فاليد او اتاكد او اتشيك من كل خطوه اسمها 
.. debug... traice... check 


روق ع عرض الايرورز ب 
span class = text danger 


بعمل الايروز ف span 
عشان اعرف اروق عليها بكلاس بوتستراب 
وبحط جتبيها br عشان تنزل به دكل ايرور 


اي ملاس مكون من كلمتين ف الbootstap 
بينهم - فاصل 




    
        */ 
    
    
            // validation for method : POST or post :
    
            $errors = []; 
            
            if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
                    // sanitization : 
    
                    $n1 = sanitizeInput($_POST["n1"]);
                    $n2 = sanitizeInput($_POST["n2"]);
                    $op = sanitizeInput($_POST["op"]);
                    
                    // validation for input or data :
    
                       
                    if(empty($n1)){
                        $errors[] = "number one is required";
                    }    
                    elseif(!is_numeric($n1)){
                        $errors[]  =  "type a vaild number for number 1";
                    }
    
    
                    if(empty($n2)){
                        $errors[]  = "number two is required";
                    } 
                    elseif(!is_numeric($n2)){
                        $errors[]  =  "type a vaild number for number 2";
                    }
    
                    $operators = ["plu","min","div","mul"];
                    if(!is_string($op)){
                        $errors[]  =  "the operation is not supported";
                    }
                    elseif(!in_array($op,$operators)){
                        $errors[]  =  "the operation is not here";
                    }
    
                    // show errors in show.php
                      ###########################
    
                    // if(!empty($errors)){
                    //     foreach($errors as $error){
                    //         echo $error . "<br>";
                    //     }
                    //     die;
                    // }
    
                    ###########################
    
    
                    // enhancement for errors by redirection to the form and session : 
                    ###########################
    
                    if(!empty($errors)){
                        $_SESSION["errors"] = $errors;
                        header("location:data.php");
                    }
    
    
    
    
                    echo $n1 . " : " . $op . " : " . $n2;
                    echo "<br>";
    
                    switch($op){
                        case "plu":
                            echo $n1 + $n2;
                            break;
    
                        case "min":
                            echo $n1 + $n2;
                            break;
    
                        case "mul":
                            echo $n1 + $n2;
                            break;
    
                        case "div":
                            if($n2 != 0){
                                echo $n1 + $n2;
                            }else{
                                echo "canot divide by zero";
                            }
                            break;
    
                        default : 
                            echo "el3b b3eed yalla";    
    
                    }
            }else{
                echo "el3b b3eed yalla msh method POST";    
            }
    
            function sanitizeInput($input){
                return trim(htmlspecialchars(htmlentities($input)));
            }
    
    
    
    ?>


    ##############################################################

    tasks list 
    ###########################

    /*

    مشروع tasks list : 
    ملف بسيط اقدر اخزن فيه التاسك بتاعتي 
    مش محتاح غير input واحد ا creat بيه التاسك
    وتتخزن في السيشن عندي 
    
    النيم بتاع input او field هو من الاخر مثل : الكي اللي بيتبعت في url 
    مثل :  id= 50 
    فمثا : لو عتدي input ل task list بروجيكت
    هسميه task-name
    
    بوتستراب ل submit بتاع task list : 
    bg success 
    مثال : انظر للكود 
    
    
    فكره المشروع : 
    يبقي لما ادوس ع التاسك 
    بتبتعت ع ملف الاكشن او اللوجيك بتاعي او سكريبت php 
    فبخزنها عندي في سيشن 
    و بعمل validation abd sanitization 
    ثم برجع لصفحه الفورم او view 
    تاني 
     وبعرض الداتا من السيشن 
     فاتا كده بعمل اداره للبيانات بتاعي....
       data  management او state management 
    
    استنتاجي : 
    post method 
    بتبقي من خلال body مثل : لوجن الفيس 
    في قلب الصفحه يعني 
    مش من خلال رابط او url 
    فانا لازم valid requst method 
    افرض حد قرر يلعب ويدخلي من خلال url 
    واتا محدد من خلال body 
    الكود هيضرب لاني مش قايله يعمل ايه لو جاله من حاجه غير بودي
    
    
    1- valid method 
    2- assign data in variable and sanitize it 
    3- validation for data or fields or inputs 
    and creat $errors
    4- check from errors 
    5- redirect 
    6- display success or error in view or form page 
    
    
    ------------------------------------
    
    
    1- valid method : 
    server ... request method
    2- assign data in variable and sanitize it 
    trim.. htmlspecialchars... htmlenteties
    3- validation for data and creat array errors: with if... elseif for each input : ex : 
    if empty 
    length if text 
    number if number 
    بكريت الاراي برا اف ميثود 
    عشان لو ف حاجه لوجيك تاني غير فاليد الميثود 
    ابوشها فيها 
    ضمن الحاجات اللي حددتها 
    وهكذا 
    
    4- check from errors : 
    والله لو للدنيا تمام : 
    هقولك عظمه والتاسك اضافت وهعرضله ده بشكل كويس
    لو لا وف errors : 
    هقولك في مشكله وهعرضهالك بشكل كويس يبين الايرور 
    
    5- redirect : 
    header : location 
    
    location : 
    / = double click 
    .. = back
    
    6- display success or error in view or form page : unset..  isset
    
    ليه بستخدم السيشن : 
    عشان احفظ الداتا بتاعتي واستخدمها ف اي سكريبت 
    
    عشان تروق ع عرض الايرور ف الفورم: 
    .alert. alert-danger 
    
    اول مشكله في عرض ال errors : 
    1- الايرور بيفضل موجود حتي مع الريفريش : 
    وده مش طبيعي المفروض يروح 
    مش طبيعي ابقي لسه داخل الموقع
    او اعمل ريفريش والاقي الايرور موجود 
    الحل : 
    unset : بتحذفلي الايرور بعد مبعرضه 
    
    "الريفريش هو ريكويست تاني يعني بيروح للسيرفر تاني  
    ففي الحاله دي بعد مبعرض الايرور بحذفه ع السيرفر
    ولما اعمل ريلود وارجع للسيرفر تاني
    يجي يتشك علي سيشن اوف ايرورز ميلاقيش حاجه لاني مسحتها بعد معرضتها 
    فميعرضش حاجه " 
    
    بس هنا بيظهر مشكله تانيه : 
    لما الايرور بيتمسح يعني الاراي اللي هي 
    session of failure 
    بتتمسح
    الكود بيضرب 
    طب والحل : 
    isset : 
    لو ف ايرور هتشغل الكود 
    لو لا خلاص ولاكان في حاجه
    "يبقي لو ناتج از سيت ترو هيشغل الكود 
    لو فولس هيطبع مفيش "
    
    عشان تروق ع عرض ال success في الفورم : 
    .alert. alert-success
    
    
    السيشن عباره عن اسوشيتيف اراي يعني كي وفاليو 
    الكي اللي هو الملف اللي هيتخزن فيه البيانات 
    الفاليو ممكن تبقي استرنج
     او اراي فتبقي قيمه compund 
     او مركبه او اراي جوا اراي 
    
    array : declear then push 
    $errors = [];
    $errors [] = ....;
    مينفعش ا push من غير مااعمل declear 
    
    
    ليه مينفعش نخزن الداتا ك array فاضي؟  
    ----------------------------------
    
    مثال if 
    بتاع task name : 
    افرد كودك واعزله عن بعضه 
    عشان كل ده بعد كده هيتحط في فانكشن 
    لسهوله التعديل والاختصار 
    فلما تفرد كل حاحه لوحدها وتعملها فانكشن لوحدها 
    لو عوزت تغير هتغير في حاحه وحده بعينها 
    مش مثلا ف الكود هنا هضطر اغير في التلاته! 
    
    يبقي حاليا الشيشن هي دانا بيز، بتاعت السايت بتاعي لغايه متتعلم sql
    

    وليه بعمل اراي الايروز برا if?  بالصوره
لانه هيحصل اوفررايد
لانه كل شويه هيجي يتشك مع كل بيانات بتتبعت
هيروخ يعمل انشيت للاراي 
ويبوش القيم فيها 
ومع كل تشيك هيفضل يعمل انشيت للاراي 
ويبش فيها 
فهيفضل يحصل اوفررايد 
طب الحل لو عايز اخليها جوا وميحصلش كل شويه اوففرايد : 
اعمل isset : 
يعني بتقوله لو موجوده متعملش حاجه 
لو مش موجوده وده ف حاله اول مره 
اعملها وبش فيها 

    */ 

    <?php
// session_start();
// لو عايز تشغل الكود شغلها ف الاسكريبتين


    $errors = [];
    // $data = []; // شغاله كويس 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $task_name = trim(htmlspecialchars(htmlentities($_POST["task_name"])));

        if(empty($task_name)){
            $errors[] = "please type the name of your task";
        }
        elseif(strlen($task_name) < 3){
            $errors[] = "task name must be grater than 3 chars";
        }
        elseif(strlen($task_name) > 20){
            $errors[] = "task name must be smaller than 20 chars";
        }


    // mahfouz answer with isset - عشان يعملها جوا اف وميحصلش اوفررايد  : 

    if(empty($errors)){
        $_SESSION["success"] = "task added successfully";

        if(!isset($_SESSION["data"])){
            $_SESSION["data"] = [];
        }
        $_SESSION["data"][] = $task_name;

    }else{
        $_SESSION["errors"] = $errors;
    }
    

    // another solution with push element in array without isset + do declear for data like error  : 

    // if(empty($errors)){
    //     $_SESSION["success"] = "task added successfully";

    //     $_SESSION["data"][] = $task_name;

    // }else{
    //     $_SESSION["errors"] = $errors;
    // }


    
    // // ليه بيحصل override ?    

    // if(empty($errors)){
    //     $_SESSION["success"] = "task added successfully";
    //     // $_SESSION["data"] = [];
    //     $_SESSION["data"][] = $task_name;

    // }else{
    //     $_SESSION["errors"] = $errors;
    // }

    

    header("location:../tasks.php");
   
    // }
    }

?>


###########################


<!-- <?php session_start(); ?> -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> bootstap demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

        <h1>Taks List</h1>
        <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <?php

                        if(isset($_SESSION["errors"])):
                            foreach($_SESSION["errors"] as $error):
                                
                ?>

                    <div class="alert alert-danger"> <?php echo $error; ?></div>


                <?php

                            endforeach;
                            unset($_SESSION["errors"]);
                        endif;
                        
                ?> 

                <?php if(isset($_SESSION["success"])):  ?>
                    <div class="alert alert-success"> <?php echo $_SESSION["success"]; ?></div>
                    <?php 
                    
                        unset($_SESSION["success"]);
                     endif; 
                    ?>

                <form action="handelers/handelTask.php" method="post">
                    <div class="mb3">
                        <input type="text" name="task_name" class="form-control" >
                    </div>
                    <div class="mb3">
                        <input type="submit" value="Creat Task" class = "form-control bg-success" >
                    </div>
                </form>
                 
                <div class="container">
                        <div class="row">
                                <div class="col-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>                              
                                                    <th>Task Name</th>                              
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php

                                                    if(isset($_SESSION["data"])):

                                                    $i = 1;

                                                    foreach($_SESSION["data"] as $row): ?>
                                                    
                                                <tr>

                                                    <td> <?php echo $i++; ?></td>                                   
                                                    <td> <?php echo $row; ?></td>  

                                                </tr>

                                                <?php endforeach; ?>
                                                <?php endif; ?>

                                            </tbody>
                                        </table>
                                </div>
                        </div>
                </div>

            </div>
        </div>
        </div>  












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>


##############################################################

cokkie
###########################

cookie.php
###########################

/*

cookies : 


مشكله : 
بما ان الريكويست stateless 
""stateless : 
غير علائقي بينهي العلاقه بمجرد مبيديك اللي  انت عايزه او اللي طالبه ف الريكويست 
كل ريكوسيت بيتعرف عليك من جديد""
هل كل مره هدخل الفيس هعمل لوجن واظبط اعدادات 
من اول وجديد ؟!!
فمحتاج حاحه تربطلك السيرفر بالكلاينت 
والحاجه دي تبقي يونيك
والحاجه دي تتبعت مع كل ريكويست 
لازم تبقي موجوده فكل ريكوسيت 
مينفعش متبقاش موجوده لاني معرفهوش.. stateless
فلازم حاجه متخزنه عندي ع السيرفر.   سيشن
ومربوطه وموجوده عند الكلاينت. ..يونيك id
والكلاينت مع كل ريكوسيت بيعتهالي
ليه؟  
عشان اعمل علاقه بالراجل اللي بيكونيكت معايا دلوقتي
ان هو ده بناءا ع الكي اليونيك
فالكي اليونيك بيبقي موجود عند الكلاينت بيعتهولي
وانا كسيرفر عندي الذاتا دي متخزنه عندي

لذلك : 
الكوكي عباره عن ملف صغير 4 كيلو بايت
بيتعمل عند الكلاينت وبيتخزن عنده ع الحهاز
الملف ده بتعرف تخزن عليه بيانات تيكست text 
بس او استرنج فقط لاغير ومتزدش عن 4 كيلو بايت
وتعرف تنشئ اكتر من ملف
الداتا دي بتبقي موجود ع المتصفح
وظيفتها؟  
تقدر تحدد انها تتبعت مع كل ريكويست بيتم اتوماتيك
اي، حاجه موجوده ف الكوكي بتتبعت مع الريكويست 
للدومين بتاعك by default
الا لو انت حددت path 
معين تبعت عليه والباقي لا
الكوكي بتستخدم ف حاجات كتير 
ومن اهمها عمليه authentication 
بتسمي session cookie based authentication 
ملف السيشن بتكرريت بكي يونيك محدد 
بيبقي عند العميل
الي هو phpsessionid وده الكوكي
وده موجود بنفس الكي ع السيرفر وده السيشن
وكل واحد بيدخل ع الويبسايت بيتعمله كي يونيك
الكوكي بتبقي مرتبطه بالسيشن 
وممكن استخدمها اني اخرن بيانات 
زي اللغه،  الوان
ومتكونش معلومات حساسه 
وممكن اتتبع اليوزر من خلال الكوكي 

ملخص الكوكي : 
ملفات بتبقي موجوده عند اليوزر وبتتخزن ف المتصفح
والملفوالواحد اقصي حاجه ليه 4 كيلو بايت 
بنخزن فيها استرينج
ويتم التعامل معاها بحساسيه 
وبتتبعت مع كل ريكويست اتوماتيك
وتقدر تحددها بباث معين او الدومين كله
ليها تايم،  ولما بيخلص بتنتهي اتوماتيك


 

كوكي ليها وظايف كتير 
ومنها ربط السيرفر بالكلاينت
 ازاي؟  
عن طريق اني بنشئ كي يونيك 
والكي ده بعمل بيه ملف بحط فيه بيانات اليوزر 
وده اسمه السيشن 
الكي ده محتاج اخزنه في مكان اعرف بيه الزائر اللي بيزورني 
فهخزنه عند الكلاينت ف كوكي 
ليه؟  
لان كوكي بتتبعت مع كل ريكويست 
فمع كل ريكوسيت هاخد id ده 
و id مرتبط بملف ف السيرفر
اللي هو السيشن 
والملف ده او السيشن مخزن فيه بياتات عن اليوزر 

وممكن كمان احط ف الكوكي مفضلات بالنسباله 
مش عايز اشغل دماغي بيها واخزنها ف السيرفر
keys 
بسيطه اتحكم من خلالها اني اجبله بياتات معينه
زي مفضلات 

وexpire date ف الواقع : 
ممكن يتعمل ويرميلك سنه،  سنتين قدام ويجددهالك كل فتره 
عشان كده كل مبدخل فيس عادي بيفتكرني. 
السيشن مبيخلص الا كل فتره كبيره وبيجدد


.......................

عملي : 
هي سوبر حلوبال فريبل ممكن : 
sotre data : 

set data : 
setcookie : name or key,  value of key,  expire, path 


expire : 
تاريخ اللي هتتمسح فيه الكوكي 
بياخده بالثانيه 
وليكن مثلا بقوله عايز، ساعه من دلوقتي
ازاي؟  
بعمل فانكشن time 
+ عدد الثواتي اللي محتاجها 
path :
 عاوز تحطها ع الدومين كله ولا صفحه جوا الدومين 
 الدومين كله : / 
 
مع كل ريفريش بيعمل سيت كوكي جديده بوقت كامل 
لان الموكي بتبببعت مع كل ويموست للسيرفر


get data 
remove data : 
باني بعمل expirw بالسالب 
فبيحصل neglecant للكوكي دي 

يبقي انا مقدرش امسح كوكي 
ولكن اقدر اسيت كوكي واتحكم في الاكسبير ديت
طب لو عايز امسح كوكي ييعم؟  
بشغل دماغي وبتحكم ف الاكسبير ديت وبخليه بالسالب 
يروح المتصفح يعمل neglecant 
للكوكي دي فتتحذف

يبقي اتا بسيت كوكي عندي في السيرفر 
وهي بتتخزن عند الكلاينت في المتصفح

اعتبر الكي بتاع السوبر جلوبال فريبل هو فريبل و الفاليو بتاعته ممكن تبقي استرنج او اراي 
لكن سوبر جلوبال فريبل نفسه عباره عن اراي 


###########################

side note : 


تقريبا اللي استنتجه اتي فيه نوعين في التسميه 
ياما الكلمتين بينهم _ : "variable"
او اول حرف في الكلمه التانيه كابيتل : 
"دي مع اسامي الفايلات والفانكشن"
مثل : handelTasks 

الاوبيرتور بعمل قبليه سبيس وبعدي سبيس 

يبقي السيشن session : 
ممكن ابش push 
فيها فاليو استرنج او اراي 


unset : 
بتحذف فريبل من الميموري 
وبتقبل mixed فليوز ، يعني ممكن تحذف اي نوع من انواع الداتا مثل : الاراي 
فممكن تمسح قيمه من الاراي او الاراي نفسها 

تنسيق الكود: 
مساغه ف الاوبيرتور وبين التاجات وبعضها 
وبين بلوكات الكود

في تسميه مثلا تايبل او زرار sumbit : 
اول حرف كابيتل من كل كلمه وبسيب مسافه عادي

مقدرش اعملها unset لانها متخزنه عند الكلاينت وليس السيرفر 
طب الحل؟  
expire 


ctrl + shift + i : inspect 
cookie in brwoser : 
inspect ...apllication... cookie

يبقي محفوظ ف الشرح : "3 دول يتكتبوا بالتفصيل ممل"
1-شرح الكونسيبت من خلال مشكله وحل 
2- تعريف الكونسيبت او الحل نظري 
 "وممكن ملخص او زياده شرح او توضيح حاجات .. لو ف حاجه زياده اكتبها"
3- عملي "الاهم"




    */ 

<?php

// store data in cokkie : 

$expire = time() + 180;
setcookie("color" , "red" , $expire , "/" );
setcookie("color" , "red" , $expire , "/" );

//get data : 

echo $_COOKIE["color"];


// remove data :

$expire = time() - 180; /// minus expire
setcookie("color" , "red" , $expire , "/" );

?>




###########################


test.php
###########################

<?php

$errors [] = "red";

print_r($errors);


?>


##############################################################

date - time

###########################


/*

date & time module : 

اي لغه بتديك modules للتعامل مع حاجات ثابته 
ف السيستم بتاعك 

يبقي بتحتك كتير معاه ف : 
hr system : غياب وكده
مواقع اشتراكات مثل : بتدفع يوم 5 كل شهر 

عشان نتعامل مع التايم بشكل كويس لازم يتحول من تيكست لرقم 
"يعني من 22/5 ل 45679 وده بيسمي timestamp"
وحدته : الثانيه،  ومن الثانيه عد براحتك 

fn time : 
بتطبع الوقت الحالي ب timestamp 
يعني بالثواني 
طب ده من امتي ؟ 
من 1971 لغايه دلوقتي 
يعني بتجيب الفرق بينهم وتطبعه بالثواني

fn date : 
بت format date 
او بتشكله بشكل معين 
وممكن اقول بتاخد تايم ستامب ،  بتشكله بتشكيل معين
يكون human readable

بتاخد format ، و timestamp(op)
فورمات : تشكيله ديت عامله ازاي ؟
ex : Y- m- d   h : i : s

تايم ستامب ده اوبشينل فلو طبعتها بالفورمات بس
فهتجبلي تاريخ اليوم اللي اتا فيه بالفورمات اللي هحطه 
 
 
 d : رقم
  D:   اسم. مثل sun 
  
  لو محطتش وقت معين ليها بيبدا من الساعه 12 

بس اتا عايز اشكل التايم باليوم او التاريخ اللي هدهوله 
يعني لو اديته امبارح تخليه امبارح وهكذا 
ومثلا لو يوزر مشترك في خدمه ليها اشتراك 
و داخل في اي يوم من الايام
اروح حاسبله شهر وقول هتخلص امتي اشتراكك
انا معرفش هو داخل امتي 
ولكن هاخد ستارت بتاعه وهزود عليها شهر وهقوله هتخلص كذا. مثل : 5/5/2023

او مثلا داخل ع الفيس ويقلك البوست بتاعك بقاله يومين
وف الااخر بيطلع تاريخ human readable 


طب لو عايز تعمل فورمات لتايم بعينه او محدد 
يبقي لازم تديهولي timestamp 
"يعني من الاخر تحول التايم لرقم "
ازاي؟  
strtotime : 
بتاخد تايم 
"تايم دي تشمل تاريخ ووقت مثل : ثانيه وسنه"
يبقي بتديله التايم  بتاعنا وهو بيحوله ل timestamp "يعني التاريخ بالثواني"
يعني مثلا بتديله : 22/5/2023 وبيحوله ل 577376728 

شرح الكود تحت  : 
يبقي حولت التايم بتاعي لرقم "time stamp "
 "من 22/5/2022 ل 5678297"
 وبعد كده حولته لفورمات معينه عايز اعرضها

ممكن احط قيمه جوا ستر تو تايم : ' first day of this month 


وممكن last day of this month

طب هستفاد ايه : 
ممكن تعمل فيها if condition 
لو مثلا شهر 28 او 30 او 31 
خد اكشن معين 

وممكن كمان تعمل ف week زي الmonth 

وممكن tomorrow. ، yesterday 

ممكن تلعب ب ستر تو تايم براحتك 
مثلا : الفرق بين يومين كام يوم وساعه وهكذا 
"ناتج ستر تو تايم بيبقي رقم بالثواني"
يعني لو جبت فرق بين تاريخين هيجي بالثواني 
وممكن تحوله براحتك

شرح الكود : 
فهنا هطرح اليومين من بعض 
فهيجيلي الناتج بالثواني 
عشان احوله لايام 
هقسم الناتج ع 24*60*60 
"من الصغير للكبير بقسم - وبمشي بالترتيب يعني اليوم فيه 24 ساعه والساعه فيها 60 دقيقه و الدقيقه فيها 60 ثانيه وهكذا "

فمثلا بوست الفيس : 
بيطرح الوقت الحالي من وقت نشر البوست
ويقولك مثلا منذ دقيقتين وهكذا 



date default time zone get : 
بتجبلك ديفولت تايم زون بتاع السيرفر
المنطقه الزمنيه 
يعني مثلا الساعه عندي ف مصر،  غير سعوديه،  غير امريكا،  كل واحد حسب التيم زون بتاعه
طب هي بتتحسب منين ف php?  
بتتحسب من تيم زون بتاع السيرفر 

فممكن تعمل ويبسايت لحد ويشتكيلك من موضوع الساعه 
وده لان الويبسايت مرفوع ع سيرفر 
والسيرفر ده موجود ف بلد فارقه عن البلد اللي هو فيها ف الوقت بسبب timezone 
فال php 
بتتعامل ع الديفولت بتاعها اللي تبع السيرفر 
فكل بلد ليها تايم زون معين والوقت بيختلف من دوله للتانيه

طب ازاي اغير تايم زون بتاعتي؟  
date default timezone set 
وتسرش ع تيم زون اللي موجود ف php.
(supported timezone in php )

بس فهي اداه معاك تستخدمها حسب السكريبت 
بتاعك مثل : اغير تيم زون حسب كل يوزر


عندك.موديل كامل للديت والتايم  ف php 
وقت متحتك. بيه هتسرش عليه 
فهتلاقي بيلت ان فانكشن
 و packges  مثل carbon "اشهرهم "

date vs time fn : 
ديت : بتطبع الوقت الحالي لو مدتهاش تاين ستامب
بالفورميلا اللي اتت عايزها بشكل الوقت الطبيعي بتاعنا 

تيم : بتطبع الوقت الحالي بالتايم ستامب




side note : 
###########################

manage data in php : session & cokkie

date & time : 
لازم تجرب تشتغل بيهم وتحتك بيهم 
عشان ع الاقل تعرف ان ف كذا بيعمل كذا 
حاي لو نسيت


عشان تغير مكان terminal?  
side...  left 
جنب poweshell دوس كليك يمين 
وعشان تعمل كلير،  كليك يمين جوا التريمنال 
واعمل clear 

ممكن امتب ف اللاسترنج كذا قيمه وافصل بينها ب , 
ex : "a, b, c"; 

لوب. loop : 
while : 
اللوب المبني ع كونديشن 
زي مثال : fgets 

foreach : 
لعرض انديكسيد او اسوشيتيف اراي 

for : لو بدايه ونهايه وبينهم انكرمينتر 


ف تسميه الفولدرات : 
new-dir

rmdir : remove directoey of folder




    

  */ 





  <?php


  // echo time();
  
  // date & strtotime fn : 
  ###########################
  
  // $strtotime = strtotime("2023-03-29 08:04");
  $strtotime = strtotime("last day of this month");
  // echo $strtotime;
  
  // echo date("Y-m-d h:i:s",$strtotime);
  
  // format with capital
  // echo date("Y-m-D h:i:s",$strtotime);
  
  
  // difference beteen 2 dys
  ###########################
  
  $day1 = strtotime("2023-05-12"); 
  $day2 = strtotime("2023-05-20"); 
  // echo ($day2 - $day1)/(24*60*60); // in days : 8
  // echo ($day2 - $day1)/(60*60); // 192 :  in hours
  
  
  // time zone:get & set
  ###########################
  
  // get : 
  
  // echo date_default_timezone_get(); // Europe/Berlin
  // echo "\n";
  // echo date("h:i:s");
  
  
  //set : 
  
  //  date_default_timezone_set("America/Los_Angeles"); // Europe/Berlin
  //  echo date("h:i:s");
  
  

  ?>

##############################################################

file system 

###########################


/*

    file system : 
يبقي file system مش من بنيه اللغه 
ولكن اللغه بتحاول تتفاعل معاه 
و اللغه بتديك apis 
اللي تخليك تتعامل مع file system ع السيرفر 
يعني بتعمل فايلات ع السيرفر
السيرفر بيبقي معمول بلينكس 
فبيقي ليه تعامل بشكل معين مع الملفات 
فاللغه بتتفاعل مع operating system 
عشان تتعامل مع الملفات 
وده مش من بينيه اللغه 
ولكن اللغه ليها access
 عليه كبير 
 فاللغه ممكن تعمل  : 
 get file?... open...  read.. write... delet 
 copy...  move.. creat directory or folder 
 remove folder...  set premession.. 
 read from file line by line....
 read from file char by char 
 cursor in file... encrypt... creat image & video ...zip.. download 
 

apis : 
يعني سوفتوير بيكلم سوفتوير 
سكريبت عباره عن سوفتوير 
وعاوز ي interact 
او يتعامل مع الفايل سيستم  
فهيتعامل معاه من خلال os 
و os ده عباره عن ايه؟  سوفتوير
والاسكريبت بتاعي عباره عن ايه سوفت وير 
فسوفت وير بيكلم سوفتوير 
عن طريق apis معينه
فمثلا عايز ا creat فايل 
ففي فانكشن معينه بتعمل حاجات مع الفايل مثل : read
هو ده api بتاعنا
من الاخر : 
سوفتوير اللي هو الاسكريبت بتاعي 
بيكلم سوفت وير اللي هو os عشان ي interact مع الفايل 
عن طريق api معينه اللي هي الفانكشن 

مش هتحتك بالفايل كتير
الا لو دخلت ف حته file system 

احنا هنسخدم الملفات عشان نخزن داتا

فانكشنز الفايل : 
fopen : 
يهمني فيها الملف والmode 

1- file name : 

اسم الملف اللي انت هتتعامل معاه بالامتداد
لما بتكتبله اسم الملف وليكن data. txt 
هو بيتعامل ع اساس الاسكريبت او الفايل اللي هو فيه 
يعني بيبص للباث او الفولدر اللي هو موجود فيه 
ع الفايل اللي انت كتبه 
فمثلا اسكريبت file اللي اتا فيه
هيقد يدور  ف الفولدر اللي هو فيه او ف الملفات اللي جتبه ع ملف  .data

2- mode :  حاجه من 8 
مودز بتبقي حرف واحد 

notes  : 
pointer or curser : مؤشر الماوس 
truncate the file to zero : يعني بيمسحها

قراءه وكتابه دي ف المودز زي الpermission او التصاريح 
يعني مسموح اعمل ايه 
يعني كل مود بيديك شويه صلاحيات او برميشنز
فممكن ملف تقدر تقرا فيه بس،  بس متكتبش او تعدل عليه 

المودز : 8 مودز
r, w, a, x 
عادي وبلس 
بلس : يعني برميشن زياده او اضافات او امكانيات زياده 

غالبا اللي هي fit معاك. :  r+ or a+ 

فمثلا a+ : 
open the file for reading and writing 
place the pointer at end of the file
if the file doesnt exist attempt to creat it 


طب اتا فتحت الملف،  عايز اكتب جواه ؟ 
لازم api او فانكشن من اللغه عشان تعرف تكتب 
الحل : 
fwrite : 
stream,  data 

1- stream : يعني الفايل 

يعني  : 
الاستريم ده يعني الفايل  المفتوح ب fopen
لاني اكيد لازم عشان اكتب ف فايل،  افتحه

2- data. :
الحاحه اللي عايز تكتبها 


طالما عملت fopen يبقي لازم تعمل fclose 
يعني طالما فتحت ملف وخلصت لازم تقفله 

لانك لو مقفلتوش  كانك فتحت شباك مابين اللغه او الاسكريبت بتاعك والفايل سيستم وسيبته مفتوح من غير امان ، وده يزعلك جامد

وكمان لو مقفاتش الملف وفضلت فاتحه 
كل متيجي ترن الكود او تريلود 
هيفضل يكتب لانك. مقفلتش الملف 

مش باسخدم ايكو مع ifwright لاني مش هعرض حاحه او اقراها 
انا بكتب بس 



يعني من الاخر : 
fopen then fwritw then fclose 



طب لو عايز اعرض داتا ملف او اقراها ؟  

fread : 
steam or file,  length 

length : لينث اللي هتقراه من الملف 

طب لو عايز اجيب كل البيانات اللي موجوده في الملف؟  

filesize : 
بتاخد file name وبتجيب حجم الملف كله 

فلما احطها مع fred هيقرا الملف كله 

 

طب لو عايز اقرا او اعرض لاين لاين؟  
fgets : stream 
ونتيجتها بتطبعلك اول لاين ف الفايل 
وبتخلي البوينتر ع اللاين التاني 
فلو عملتها تاتي هتطبعلك اللاين التاني 
وهكذا

مشكله : 
طب دلوقتي هفضل اجيب لاين لاين بالطريقه دي!! 
عايز حاجه دينمك
وكمان دلوقتي انا معرفش اللينز هتبقي كام
الحل انك تعمل while loop معتمد ع شرط ب fgets

وبنفس المنطق ده هتتعامل مع الداتا بيز 
و اللي بيحصل ف الداتا بيز انك بتجيب الداتا 
بس مش عارف كام ديكورد جايلك 
فتروح عامل while loop وتروح فاتح الكونيكشن 
مع الداتا بيز 
وتفضل شغاله لغايه متبقي فولس 

يبقي الثابت معايا : 
اني بعمل fopen و fclose 
ومبينهم بعيش ريت،  ريد براحتك 

شويه فانكشن : 
unlink :
بتديله اسم الملف وبيمسحهولك 

rename : 
from to...  اسم الملف 

mkdir : بديله اسم الفولدر 
 

rmdir : remove directoey of folder 
وبتديله اسم dir 

في لوجيك مع rmdir 
لو عملت ريلود والملف ممسوح هيديك ايرور 
فلازم تتشك باف موجود ولا 
عن طريق : 
file exists : بتشك بيها ع ملف او فولدر 
فلو موجود هيتمسح 
لو لا خلاص

حاحات مهمه : 
file get contents 
file put contents 
json encodeb
json decodeb

جرب خبط ف filesystem وشوف حاجات تاتيه غير دي 

جرب تعمل regestration form 
وتحفظ بيانات اليوزر ف ملف تيكست 

تطبيق كامل بالفايل سيستم login & logout و regestier 
وهتلم php كلها 

 




  

    */ 


<?php

// write in file : 

// $file = fopen("test.txt","a+");
// fwrite($file,"abdo,0116483984,abdo@gmail.com\n");
// fclose($file);

// read and display file : 

$file = fopen("test.txt","a+");

// read all file : 

// echo fread($file,filesize("test.txt"));

// read line by line by fgets only : 

// echo fgets($file);
// echo fgets($file);
// echo fgets($file);

// read line by line by fgets with while loop : 

// while( $row = fgets($file)){
//     echo $row;
// }

// rename("test.txt","hamada.txt");

// mkdir("new-dir");

//rmdir : 

if(file_exists("new-dir")){
    rmdir("new-dir");
}
 
fclose($file);





?>


##############################################################

csv
###########################


<?php


/*

fgetcsv : 

بتعرض الداتا من csv ع هيئه indexed array 
"بتحولي كل سنجل لاين لاراي "


fputcsv :
 
بتخزن الداتا ف csv ع شكل قيم بينها , 
وبتنزل سطر بين كل مثلا يوزر والتاني 
او كل لاين والتاني
"بيحول الاراي لاسترنج "
"وبينزل لاين بين كل داتا والتانيه زي فكره br "
"وبيروق عليك. وبيعمل enhancemenntb. زي انه يحط الاسم بين دبل كوتيشن "

لوب while ع fget سواء txt او csv 
ممكن اعمل access للعناصر جوا ب اندكس 
مش 2 بس جوا اللوب 
ازاي؟  
ببساطه انا بقوله لو اتكن ال row بيساوي 
لاين من csv او fgetcsv 
اطبعلي مثلا row of 0 
وف الحاله دي هيبقذ row جواه اراي واحده بيطبع منها 
يعني من الاخر كاني بطبع indexed array 

      
*/ 

// $users = 
// [
//     [1,2,3],
//     [1,2,3],
//     [1,2,3],
// ];


//csv : store data

// $file = fopen("../data/users.csv","a+");

// foreach($users as $user){
//     fputcsv($file,$user);
// }

// fclose($file);


//txt : store data

// $file = fopen("../data/user.txt","a+");

// // foreach($users as $user){
// //     $user_data = implode(",",$user) . "\n";
// //     fwrite($file,$user_data);
// // }

// fclose($file);

// mahfouz
// // foreach($users as $user){
        // $file = fopen("../data/user.txt","a+");
// //     $user_data = implode(",",$user) . "\n";
// //     fwrite($file,$user_data);
        // fclose($file);
// // }





// csv : get data :

// $file = fopen("../data/user.txt","a+");

// // while($row = fgetcsv($file)){
// //     echo $row[0] . "<br>";
// //     // print_r($row);
// // }

// fclose($file);



// txt : get data 

// while($row = fgets($file)){
//     $row = explode(",",$row);
//     echo $row[0] . "<br>";
//     // print_r($row);
// }

// fclose($file);

##############################################################

json 
###########################




<?php


/*

    
    - هو طريقه للتواصل بين client side وخاصه javascript 
و server side 

- json format :  
كما موضح بالصوره 


- ممكن تعمل
 nested object  as a value 
 كما موضح بالصوره 

- curly braaces hold objects 
- square brackets hold array 

- json data types : 
string,  number(int,float),object, array, null, boolean 
كل data types اللي هي بتدعم عندنا ف php 


- لما بتستعمل json بدل مترجع ل client side 
اhtml ، بترجعله json 

- convert from array or object to json and opposite : 

- json decode : 
حاحه زي decrypt يعني برجع الحاجه لاصلها 
يعني هرجع من json ل (object,array)

- json encode : 
بياخد  array او object 
يحوله ل json 

يعني : يبفك الشفره اللي جايلي ب decode 
او بشفر عشان ابعت ب encode 

- لو الاراي اسوشيتيف association : 
يعني key & value 
بيحولها ل object يعني بكيرلي بريسز
" لكن indexed بيحولها لاراي عادي "
"ولو multidementional هيحولها ل لاراي واللي جوا ع حسب associativr or ondexed"


- انت لما بتعمل decode ال josn بيرجعلك
البيانات ع هيئه object 
 فلو عملت true ف json decode 
بيحول ال object ل association array 
"حتي لو indexed or multidimensional وبيخلي الكي هو index مثل : 0 و 1 كما موضح بالصوره .   "

- ناتج json encode  
بيبقي json string ممكن اعمله echo 

- ا json encode : 
بتقبل mixed value ، يعني ممكن احول 
string,  number....  


- data format.... array of arrays 


*/ 

$users =
[
    ['mostafa ali', "mostafa@eraasoft.com", "01024562899"],
    ["morad", "khaled@eraasoft.com", "01254875898"],
    ["ali" , "ali@eraasoft.com","06546465464"],

];

$student = 
[
    "name" => "abdo",
    "email" => "abdo@eraasoft.com",
    "gender" => "male"

]; 


$students =
[
    
    ["name" => "abdo",
    "email" => "abdo@eraasoft.com",
    "gender" => "male"],

    ["name" => "abdo",
    "email" => "abdo@eraasoft.com",
    "gender" => "male"]
];

$user = ['mostafa ali', "mostafa@eraasoft.com", "01024562899"];


// convert from array or object to jason : 

// multidementional array :
// echo json_encode($users);

// assosiative array : 
// echo json_encode($students);
// $student_json =  json_encode($student);
// echo $student_json;

// indexed array :
// echo json_encode($user);
// $user_json =  json_encode($user);
// echo $user_json;

// convert from jason to array or object   : 

    /// object
    // $student_object =  json_decode($student_json);

    // echo "<pre>";
    // print_r($student_object);

    // associative array : 
    // $student_array =  json_decode($student_json,true);

    // echo "<pre>";
    // print_r($student_array);

    // indexed array : 
    // $user_array =  json_decode($user_json,true);

    // echo "<pre>";
    // print_r($user_array);


    // $test = "test";
    // echo $test;
    // echo "<br>";
    // $test_json = json_encode($test);
    // echo $test_json;


##############################################################


<?php

/*

      
file get contens : 
###########################


get the entire file into string 
هتجبلك كل الداتا ك استرنج 
من غير fopen ولا fgets ولا fclose 
ولكن كاسترنج 

وممكن كمان ت get data من url خارجي 

وتقدر تستقبل بيها البيانات من اي نوع من انواع الملفات مثل : csv,  json ,txt

##############################################################

file put contens : 
###########################

تكتب او بتخزن داتا جوا الملف
والديفولت بتاعها تمسح اللي موجود ف الملف 
طب الحل؟  
ممكن تضيف flag
عباره عن constant اسمه file appended 
بيحافظ ع الداتا بتاعتك بدل ميحصل overwriting 
يعني بيكمل ع القديم 

ممكن تضيف بيها mixed data براحتك،  وده بيعتمد ع الملف اللي هتضيف بيه 
- csv,  txt : 
store : string 
but : 
txt : get string 
csv : get array 


    */ 

 ##############################################################

    // get data : 
    ###########################

    $users = file_get_contents("users.csv");
    // echo $users;
    // echo "<br>";
    // echo $users[0]; //1
    // echo "<br>";
    // echo $users[3]; // , "coma"
    // echo "<br>";
    // echo $users[5]; // " " "space "

    ##############################################################

    // get data from external url :
    ###########################

    $url = file_get_contents("http://json.com/");
    // echo $url;


    ##############################################################

    // try to convert data in a srting from csv file but not accurate(dont do it) : 
    ###########################
 
    // $users2 = file_get_contents("users.csv");
    // $users2 = explode(",",$users2);
    // echo "<pre>";
    // print_r($users2);
    // echo $users2[0]; 

    ##############################################################

    // file put contents 
    ###########################


    // file_put_contents("users.txt","abdo",FILE_APPEND);
    // file_put_contents("users.txt","MORAD\n",FILE_APPEND);

    ##############################################################

    // try to push array in txt and csv but ميتفعش : 
###########################

    // file_put_contents("users.csv",[1,2],FILE_APPEND); // 12
    // file_put_contents("users.txt",[1,2],FILE_APPEND); // 12



















    
    