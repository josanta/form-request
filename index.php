<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">

    <title>Welcome | Home</title>
</head>

<body>
    <div class="container">
        <h1>Request form</h1>
        <p>
            <button class="btn btn-outline-secondary btn-lg mytoggle" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseProjectDetails" aria-expanded="false" aria-controls="collapseProjectDetails">
                ProJect Details
            </button>
        </p>
        <div class="collapse" id="collapseProjectDetails">
            <div class="card card-body">
                <form id="form1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="equipname" class="form-label">Equipment Name</label>
                                <input type="text" class="form-control" id="equipname" name="equipname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="biddue" class="form-label">BID DUE</label>
                                <input type="date" class="form-control" id="biddue" name="BID DUE" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="rftsent" class="form-label">RFT SENT</label>
                                <input type="date" class="form-control" id="rftsent" name="RFT SENT">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bidduration" class="form-label">BID Duration</label>
                                <input type="number" class="form-control" id="bidduration" name="BID Duration" value=6
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary btn-lg submit-btn" onclick="collectFormData('form1')"
                        data-bs-toggle="collapse" data-bs-target="#collapseProjectDetails" aria-expanded="false"
                        aria-controls="collapseProjectDetails">Save</button>
                </form>
            </div>
        </div>
        <!-- gdhjklskdjhgdhjklllkjhhhhhhjkllkjhhhhhhjkllkjhhhjkllkjhhhjkllskdjhfggghdjklllllldkj -->
        <p>
            <button class="btn btn-outline-secondary btn-lg mytoggle" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseBidder" aria-expanded="false" aria-controls="collapseBidder">
                Bidder
            </button>
        </p>
        <div class="collapse" id="collapseBidder">
            <div class="card card-body">
                <form id="form2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="projectname" class="form-label"> Project Name:</label>
                                <input type="text" class="form-control" id="projectname" name="Project Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="owner" class="form-label">Owner:</label>
                                <input type="text" class="form-control" id="owner" name="Owner">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Job Site:" class="form-label">Job Site:</label>
                                <input type="text" class="form-control" id="Job Site:" name="Job Site">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Category" class="form-label">Category</label>
                                <input type="text" class="form-control" id="Category" name="Category">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Spec Number:" class="form-label">Spec Number:</label>
                                <input type="text" class="form-control" id="Spec Number:" name="Spec Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Engineering:" class="form-label">Engineering:</label>
                                <input type="text" class="form-control" id="Engineering:" name="Engineering">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Procurement:" class="form-label">Procurement:</label>
                                <input type="text" class="form-control" id="Procurement:" name="Procurement">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Bidder Legal Name:" class="form-label">Bidder Legal Name:</label>
                                <input type="text" class="form-control" id="Bidder Legal Name:"
                                    name="Bidder Legal Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Bidder Contact Name:" class="form-label">Bidder Contact Name:</label>
                                <input type="text" class="form-control" id="Bidder Contact Name:"
                                    name="Bidder Contact Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Bidder Contact Email:" class="form-label">Bidder Contact Email:</label>
                                <input type="email" class="form-control" id="Bidder Contact Email:"
                                    name="Bidder Contact Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Bidder Phone:" class="form-label">Bidder Phone:</label>
                                <input type="text" class="form-control" id="Bidder Phone:" name="Bidder Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Bid Date" class="form-label">Bid Date:</label>
                                <input type="date" class="form-control" id="Bid Date" name="Bid Date">
                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-secondary btn-lg submit-btn" onclick="collectFormData('form2')"
                        data-bs-toggle="collapse" data-bs-target="#collapseBidder" aria-expanded="false"
                        aria-controls="collapseBidder">Save</button>
                </form>
            </div>
        </div>
        <!-- ****************************************************************************************** -->
        <!-- gdhjklskdjhgdhjklllkjhhhhhhjkllkjhhhhhhjkllkjhhhjkllkjhhhjkllskdjhfggghdjklllllldkj -->
        <p>
            <button class="btn btn-outline-secondary btn-lg mytoggle" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsePrice" aria-expanded="false" aria-controls="collapsePrice">
                Pricing Breakdown
            </button>
        </p>
        <div class="collapse" id="collapsePrice">
            <div class="card card-body">
                <form id="form3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="cidnum" class="form-label"> CID Number:</label>
                                <input type="text" class="form-control" id="cidnum" name="CID Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="desc" class="form-label">Description:</label>
                                <input type="text" class="form-control" id="desc" name="Description">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="qty" class="form-label">Qty</label>
                                <input type="number" class="form-control" id="qty" value=1 min=1
                                    onchange="calculateTotal()" name="Quantity">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="unit" class="form-label">Unit</label>
                                <input type="text" class="form-control" id="unit" name="Unit">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="unitprice" class="form-label">USD $ - US Dollar</label>
                                <input type="number" class="form-control" id="unitprice" value=10 min=1
                                    name="USD $ - US Dollar" onchange="calculateTotal()">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tprice" class="form-label">Total Price</label>
                                <input type="number" class="form-control" id="tprice" name="Total Price" readonly>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary btn-lg submit-btn" onclick="collectFormData('form3')"
                        data-bs-toggle="collapse" data-bs-target="#collapsePrice" aria-expanded="false"
                        aria-controls="collapsePrice">Save</button>
                </form>
            </div>
        </div>
        <!-- ****************************************************************************************** -->
        <form id="combinedForm" action="process.php" method="post">
            <input type="hidden" name="combinedData" id="combinedData">
            <button type="button" class="btn btn-secondary btn-lg submit-btn"
                onclick="submitCombinedForm()">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="public/js/index.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>