//ajax call for a dropdown of directors
(function(){$.ajax({
    url: "../../server/api/api.php",
    type: 'GET',
    data:{table:'directors',
          adata:{id:"all"}
        },
    success: function(data) {
   console.log(JSON.parse(data))
      let arr=JSON.parse(data)
        
        for (let i=0; i<arr.length; i++) {

          $("select").append("<option value='"+i+"'>"+arr[i]+"</option>")

         }
   }
})
 }()) 