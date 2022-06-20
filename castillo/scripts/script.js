
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
    console.log(data)
    return data["Key"]

  }
  if(error) {
    console.log(error)
    return null

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
    return data["Key"]

  }
  if(error) {
    console.log(error)
    return null

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
      let picPath = saveImage(pic[0], `${fileName}.jpg`)
      if (picPath){
        picPath = `${PROJECT}/storage/v1/object/${picPath}`
        register(fname,lname,email,picPath)
      }
    });
  });