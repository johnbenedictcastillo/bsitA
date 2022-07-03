
// Create a single supabase client for interacting with your database 
const PROJECT = 'https://zzivlqstynxhbfabxhpi.supabase.co'
const KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Inp6aXZscXN0eW54aGJmYWJ4aHBpIiwicm9sZSI6ImFub24iLCJpYXQiOjE2NTQ0MDE5NzAsImV4cCI6MTk2OTk3Nzk3MH0.wntGDWfy7wcuhepHw2XwbInty25vUG_6AI4U4GsJTKg'


const connection = supabase.createClient(PROJECT, KEY)


async function saveImage(){
  
  let fname = $('#first-name').val();
  let lname = $('#last-name').val();
  let email = $('#email').val();
  let pic = $('#profile-pic').prop('files');
  let fileName = fname.replace(" ","").toLowerCase() +"_" +lname.replace(" ","").toLowerCase();

  const { data, error } = await connection.storage.from('products')
  .upload(`public/${fileName}.jpg`, pic[0], {
    upsert: true
  })
 
  if(data) {      
    //picPath = `${PROJECT}/storage/v1/object/public/${data["Key"]}`
    picPath = 'https://zzivlqstynxhbfabxhpi.supabase.co/storage/v1/object/'+data["Key"]
    register(fname,lname,email,picPath)

  }
  if(error) {
    console.log(error)
  }

}
async function register(fname, lname, email, picPath){
  const { data, error } = await connection.from("students").insert({
    first_name: fname,
    last_name: lname,
    email: email,
    image_url: picPath
})
  if(data) {
    console.log(data)
    getStudent();

  }
  if(error) {
    console.log(error)
    return null

  }

}

async function getStudent() {
  $('#students-table').show();

  let tbody = $("#tbody");
  let loading = $("#loading");
  let tr = "";
  loading.text("Loading...")
  const res = await connection.from("students").select("*");
  if (res) {
      for (var i in res.data) {
          tr += `<tr>
       <td>${res.data[i].id}</td>
       <td>${res.data[i].first_name}</td>
       <td>${res.data[i].last_name}</td>
       <td>${res.data[i].email}</td>
       <td><img src="${res.data[i].image_url}" height="100" width="100"></td>
       </tr>`;
      }
      tbody.html(tr);
      loading.text("")

  }

}
$(document).ready(function(){
    $('#students-table').hide();
    $('#navigation').load("/castillo/pages/nav.html");
    
    // jQuery methods go here
    $( "#registration" ).submit(function( event ) {
      event.preventDefault();
      saveImage()

    });
  });