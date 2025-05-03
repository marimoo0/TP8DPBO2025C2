<h2>Edit Course</h2>

<div class="card">
    <div class="card-body">
        <form action="index.php?controller=course&action=update" method="post">
            <input type="hidden" name="id" value="<?php echo $course['id']; ?>">

            <div class="mb-3">
                <label for="code" class="form-label">Course Code</label>
                <input type="text" class="form-control" id="code" name="code" value="<?php echo $course['code']; ?>"
                    required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $course['name']; ?>"
                    required>
            </div>

            <div class="mb-3">
                <label for="credits" class="form-label">SKS</label>
                <input type="number" class="form-control" id="credits" name="credits"
                    value="<?php echo $course['credits']; ?>" min="1" max="6" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-warning">Update</button>
                <a href="index.php?controller=course&action=index" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>