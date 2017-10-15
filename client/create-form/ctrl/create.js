

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

          $("select").append("<option>"+arr[i]+"</option>")

         }
   }
})
 }()) 
function movie(name,dirctor){
    this.name=name;
    this.d_id=dirctor;
}
function createMovie(){
    console.log("works")
  let m= new movie($("#name").val(),$("#director").val());
 (function(){$.ajax({
    url: "../../server/api/api.php",
    type: 'POST',
    data:{table:'movie',
          adata:m
         },
    success: function(data) {
        console.log(data)
     }
    })
})
}
    

    

