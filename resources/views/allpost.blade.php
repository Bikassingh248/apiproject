<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-8 bg-primary text-white mb-4">
                <h1>All Posts</h1>
                    <div class="card-header">
                        <h2>Login</h2>
                    </div>
            </div>
            <div class="row mb-4">
                <div class="col-8">
                    <a href="/addpost" class="btn btn-primary">Add Post</a>
                    <button class="btn btn-sm btn-danger" id="logoutBtn">Logout</button>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div id="postContainer">
                    <table class="table table-bordered">
                            <tr class="table-dark">
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Views</th>
                                <th>Update</th>
                            </tr>
                            <tr>
                                <td ><img src="" width="150px"  alt=""></td>
                                <td>
                                    <h5>Post Title</h5>
                                </td>
                                <td>
                                    <p>Post Description</p>
                                </td>
                                <td>100</td>
                                <td><button onclick="deletePost($(post.id))" class="btn btn-sm btn-warning">Edit</button> <button class="btn btn-sm btn-danger">Delete</button></td>
                            </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    document.querySelector('#logoutBtn').addEventListener('click', function() {
        const token = localStorage.getItem('token');
        fetch('/api/logout', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        })
        .then(response => response.json())
            .then(data => {
                console.log('Logout successful:', data);
                window.location.href = '/login';
         });
    })
</script>
</body>
</html>