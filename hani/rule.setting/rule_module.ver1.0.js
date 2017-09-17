
function makeRule()
{
  $(document).ready(function() {
      var rules = new Array();
      if($('#rules1').is(':checked')) {
          var _v=$("#rules1").val();
          rules.push(_v);
      }
      if($('#rules2').is(':checked')) {
          var _v=$("#rules2").val();
          rules.push(_v);
      }
      $.ajax ({
          type:"POST",
          url:"./genRules.php",
          dataType:'json',
          data:{'rules': rules},
          success:function(data) {
              alert ("success.");
          }
      });
      console.log(rules);
      //rules=[];

  });
    /*
    var contact = new Object();
    contact.firstname = "Jesper";
    contact.surname = "Aaberg";
    contact.phone = ["555-0100", "555-0120"];

    var memberfilter = new Array();
    memberfilter[0] = "surname";
    memberfilter[1] = "phone";
    var jsonText = JSON.stringify(contact, memberfilter, "\t");
    //document.write(jsonText);
    */
}
