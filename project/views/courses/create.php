<h2>Create New Course</h2>

<div class="card">
    <div class="card-body">
        <form action="index.php?controller=course&action=store" method="post">
            <div class="mb-3">
                <label for="code" class="form-label">Course Code</label>
                <input type="text" class="form-control" id="code" name="code" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="credits" class="form-label">SKS</label>
                <input type="number" class="form-control" id="credits" name="credits" min="1" max="6" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="index.php?controller=course&action=index" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>