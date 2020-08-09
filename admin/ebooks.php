<img src="./images/imgOneNew-nwq-two.png" class="img img-fluid m-2" style="width: 10%" alt="Minister Sir">
<div class="display-4 float-right font-weight-bold m-4">
Books
</div>

<?php include './includes/headeren.inc.php' ?>



<div class="m-4">
    <?php include './includes/messages.php' ?>
    <div class="row">
        <div class="col-md-6">

            <select onchange="myFunction()" name="language" id="language" class="form-control mb-4 mt-4">
                <option selected disabled>-- Choose Language --</option>
                <option value="Hindi">Hindi</option>
                <option value="English">English</option>
            </select>

            <script>
                function myFunction() {
                    var x = document.getElementById("language").value;
                    if (x === 'English') {
                        window.location.href = "ebooks.php";
                    } else if (x === 'Hindi') {
                        window.location.href = "books.php";
                    }
                }
            </script>


            <form action="../src/main.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title of Book</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date of Release</label>
                            <input type="date" class="form-control" id="date" name="date" aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="exampleInputPassword1">Cover Photo of Book</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Link</label>
                    <input type="text" class="form-control" id="link" name="link" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                
             
                <button type="submit" name="bookSubmitBtn" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col">
            <a href="./viewbooks.php" class="btn btn-outline-info btn-lg">
                View All Books
            </a>
        </div>
        
    </div>
</div>

<script>
	CKEDITOR.replace('description');
</script>
<?php include './includes/footer.inc.php' ?>