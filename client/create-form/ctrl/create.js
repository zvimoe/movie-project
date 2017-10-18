
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
//function constractor for movies
function movie(name,dirctor,id){
    this.name=name;
    this.d_id=dirctor;
    this.id=id
}
// function to create a new movie
function createMovie(){
    console.log("works")
  let m= new movie($("#name").val(),$("#director").val()+1,0);
 (function(){$.ajax({
    url: "../../server/api/api.php",
    type: 'POST',
    data:{table:'movies',
          adata:m
         },
    success: function(data) {
        console.log(data)
     }
    })
}())
}
function updateMovie(){
   
  let m= new movie($("#name").val(),$("#director").val()+1,$("#id").val());
     console.log(m);
 (function(){$.ajax({
    url: "../../server/api/api.php",
    type: 'PUT',
    data:{table:'movies',
          adata:m
         },
    success: function(data) {
        console.log(data)
     }
    })
}())
}
//TODO validation on inputs
    

    

