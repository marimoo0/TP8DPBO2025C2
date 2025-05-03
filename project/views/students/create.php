<h2>Create New Student</h2>

<div class="card">
    <div class="card-body">
        <form action="index.php?controller=student&action=store" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="join_date" class="form-label">Join Date</label>
                <input type="date" class="form-control" id="join_date" name="join_date" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="index.php?controller=student&action=index" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>