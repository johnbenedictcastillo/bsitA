
// Create a single supabase client for interacting with your database 
const PROJECT = 'https://zzivlqstynxhbfabxhpi.supabase.co'
const connection = supabase.createClient(PROJECT, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Inp6aXZscXN0eW54aGJmYWJ4aHBpIiwicm9sZSI6ImFub24iLCJpYXQiOjE2NTQ0MDE5NzAsImV4cCI6MTk2OTk3Nzk3MH0.wntGDWfy7wcuhepHw2XwbInty25vUG_6AI4U4GsJTKg')


async function saveImage(pic, fileName){
  const { data, error } = await connection
  .storage
  .from('images')
  .upload(`public/${fileName}`, pic, {
    upsert: true
  })
  if(data) {      
    picPath = `${PROJECT}/storage/v1/object/${data["Key"]}`
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
  let tbody = $("#tbody");
  let loading = $("#loading");
  let tr = "";
  loading.text("Loadding....")
  const res = await connection.from("students").select("*");
  if (res) {
      for (var i in res.data) {
          tr += `<tr>
       <td>${res.data[i].id}</td>
       <td>${res.data[i].first_name}</td>
       <td>${res.data[i].last_name}</td>
       <td>${res.data[i].email}</td>
       <td><img src="${res.data[i].image_url}" ></td>
       </tr>`;
      }
      tbody.innerHTML = tr;
      loading.innerText = ""

  }

}
$(document).ready(function(){

    // jQuery methods go here
    $( "#registration" ).submit(function( event ) {
      event.preventDefault();
      let fname = $('#first-name').val();
      let lname = $('#last-name').val();
      let email = $('#email').val();
      let pic = $('#profile-pic').prop('files');
      let fileName = lname.replace(" ","");
      saveImage(pic[0], `${fileName}.jpg`)

    });
  });