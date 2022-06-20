
// Create a single supabase client for interacting with your database 
const connection = supabase.createClient('https://zzivlqstynxhbfabxhpi.supabase.co', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Inp6aXZscXN0eW54aGJmYWJ4aHBpIiwicm9sZSI6ImFub24iLCJpYXQiOjE2NTQ0MDE5NzAsImV4cCI6MTk2OTk3Nzk3MH0.wntGDWfy7wcuhepHw2XwbInty25vUG_6AI4U4GsJTKg')


async function saveImage(pic){
  const { data, error } = await connection
  .storage
  .from('images')
  .upload('public/profile.png', pic, {
    cacheControl: '3600',
    upsert: true
  })
  if(data) 
    console.log(data)
  if(error) 
    console.log(error)

}

$(document).ready(function(){

    // jQuery methods go here
    $( "#registration" ).submit(function( event ) {
      event.preventDefault();
      let fname = $('#first-name').val();
      let lname = $('#last-name').val();
      let email = $('#email').val();
      let pic = $('#profile-pic').prop('files');
      saveImage(pic)
    });
  });