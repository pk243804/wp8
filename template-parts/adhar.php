<?php 
      /* Template Name: Test  */
    get_header();  


      $arr=range(99,9);
      $brr=range(99,9);

      $randa=array_rand($arr);
      $randb=array_rand($brr); 

      $a=$arr[$randa];
      $b=$brr[$randb];

      $r=$a+$b; 

      $cap=$a."+".$b;

if(isset($_POST['submit']))
 {
    if($_POST['ques']==$_POST['ans']){
    echo '<script> alert("Answer is correct"); </script>';
    } else {
    echo '<script> alert("Answer is not correct"); </script>';
    }
 }

?>

  <form method="post" style="margin:40px;">
    <?php
      echo $cap."=";
    ?>
    <input type="hidden" name="ans" value="<?php echo $r; ?>"> &nbsp;
    <input type="text" name="ques" autofocus><br>
    <input type="submit" name="submit" value="Submit">
  </form>





<!--Aadhar verification Program -->

<div class="form-group" style="margin:40px;">
  <label for="aadhaar_number">Aadhaar Number</label>&nbsp;
    <input maxlength="12" type="number" id="aadhaar_number" name="aadhaar_no" required>
    <p id="aadhaar_number_op"></p>
  </div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>                        
<script>
   var d = [
  [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
  [1, 2, 3, 4, 0, 6, 7, 8, 9, 5],
  [2, 3, 4, 0, 1, 7, 8, 9, 5, 6],
  [3, 4, 0, 1, 2, 8, 9, 5, 6, 7],
  [4, 0, 1, 2, 3, 9, 5, 6, 7, 8],
  [5, 9, 8, 7, 6, 0, 4, 3, 2, 1],
  [6, 5, 9, 8, 7, 1, 0, 4, 3, 2],
  [7, 6, 5, 9, 8, 2, 1, 0, 4, 3],
  [8, 7, 6, 5, 9, 3, 2, 1, 0, 4],
  [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
];

// permutation table p
var p = [
  [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
  [1, 5, 7, 6, 2, 8, 3, 0, 9, 4],
  [5, 8, 0, 3, 7, 9, 6, 1, 4, 2],
  [8, 9, 1, 6, 0, 4, 3, 5, 2, 7],
  [9, 4, 5, 3, 1, 2, 6, 8, 7, 0],
  [4, 2, 8, 6, 5, 7, 3, 9, 0, 1],
  [2, 7, 9, 3, 8, 0, 6, 4, 1, 5],
  [7, 0, 4, 6, 9, 1, 3, 2, 5, 8]
];

// inverse table inv
var inv = [0, 4, 3, 2, 1, 5, 6, 7, 8, 9];

// converts string or number to an array and inverts it
function invArray(array) {
  if (Object.prototype.toString.call(array) === "[object Number]") {
    array = String(array);

  }
  if (Object.prototype.toString.call(array) === "[object String]") {
    array = array.split("").map(Number);
  }
  return array.reverse();
}

// generates checksum
function generate(array) {
  var c = 0;
  var invertedArray = invArray(array);

  for (var i = 0; i < invertedArray.length; i++) {
    c = d[c][p[((i + 1) % 8)][invertedArray[i]]];
  }
  return inv[c];
}

// validates checksum
function validate(array) {
  var c = 0;
  var invertedArray = invArray(array);
 console.log(invertedArray);
  for (var i = 0; i < invertedArray.length; i++) {
    c = d[c][p[(i % 8)][invertedArray[i]]];
  }
  return (c === 0);
}

var g_aadhar_num = "";  
$(document).ready(function() {
  $("#aadhaar_number_op")[0].innerText = "Enter 12 digits...";
  $('#aadhaar_number').keyup(function() {
      $("#aadhaar_number_op")[0].innerText = "Enter " + (12 - $('#aadhaar_number')[0].value.length) + " more digits...";

    if ($('#aadhaar_number')[0].value.length == 12) {
        g_aadhar_num = $('#aadhaar_number')[0].value;

        if (validate($('#aadhaar_number')[0].value) == true) {
          $("#aadhaar_number_op").attr("style", "color:green");
          $("#aadhaar_number_op")[0].innerText = "Checksum Pass!"
        } else {
          $("#aadhaar_number_op").attr("style", "color:red");
          $("#aadhaar_number_op")[0].innerText = "Checksum Fail! Invalid Aadhar"
        }

    } else if($('#aadhaar_number')[0].value.length > 12) {
      $("#aadhaar_number_op")[0].innerText = "can't enter more than 12 digits...";
      $('#aadhaar_number')[0].value = g_aadhar_num;
    }

  });
});
</script>


 
<?php  get_footer(); ?>