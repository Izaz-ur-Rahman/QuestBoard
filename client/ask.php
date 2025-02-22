<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <h2 class="text-center mb-4 fw-bold">Ask A Question</h2>

            <form action="../server/requests.php" method="post" class="p-4 shadow rounded bg-light">

                <div class="mb-3">
                    <label for="Title" class="form-label fw-semibold">Title</label>
                    <input type="text" name="Title" class="form-control shadow-sm" id="Title" placeholder="Enter your question" required>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label fw-semibold">Description</label>
                    <textarea name="desc" class="form-control shadow-sm" id="desc" rows="4" placeholder="Provide more details..." required></textarea>
                </div>

                <div class="mb-3 ">
                    <label for="category" class="form-label fw-semibold">Category</label>
                 <?php
                    include('category.php');

                 ?>
                </div>

                <button type="submit" name="ask" class="btn btn-primary w-100 shadow">Ask Question</button>

            </form>
        </div>
    </div>
</div>
