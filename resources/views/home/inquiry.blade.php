    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Inquiry Form</title>
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="text-center">Inquiry Form</h1>
            <form action="/inquiry/store" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="studentId" class="form-label">Student ID</label>
                    <input type="int" class="form-control" id="studentid" name="student_id" required>
                </div>
                <div class="mb-3">
                    <label for="collegedetailId" class="form-label">CollegeDetail ID</label>
                    <input type="int" class="form-control" id="collegedetailid" name="collegedetail_id" required>
                </div>
                <div class="mb-3">
                    <label for="inquiryDate" class="form-label">Date</label>
                    <input type="date" class="form-control" id="inquiryDate" name="inquirydate" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit Inquiry</button>
            </form>
        </div>

        <!-- Bootstrap JS, Popper.js, and jQuery (Optional) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    </body>
    </html>

