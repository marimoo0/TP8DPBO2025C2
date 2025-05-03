<h2>Courses</h2>
<div class="mb-3">
    <a href="index.php?controller=course&action=create" class="btn btn-primary">Add New Course</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Name</th>
            <th>SKS</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($courses && $courses->num_rows > 0): ?>
        <?php while ($row = $courses->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['code']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['credits']; ?></td>
            <td>
                <a href="index.php?controller=course&action=edit&id=<?php echo $row['id']; ?>"
                    class="btn btn-sm btn-warning">Edit</a>
                <a href="index.php?controller=course&action=delete&id=<?php echo $row['id']; ?>"
                    class="btn btn-sm btn-danger"
                    onclick="return confirm('Are you sure you want to delete this course?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        <?php else: ?>
        <tr>
            <td colspan="5" class="text-center">No courses found</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>