<h2>Enrollments</h2>
<div class="mb-3">
    <a href="index.php?controller=enrollment&action=create" class="btn btn-primary">Add New Enrollment</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Student</th>
            <th>Course</th>
            <th>Semester</th>
            <th>Grade</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($enrollments && $enrollments->num_rows > 0): ?>
        <?php while ($row = $enrollments->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['student_name'] . ' (' . $row['nim'] . ')'; ?></td>
            <td><?php echo $row['course_name'] . ' (' . $row['course_code'] . ')'; ?></td>
            <td><?php echo $row['semester']; ?></td>
            <td><?php echo $row['grade'] ? $row['grade'] : '-'; ?></td>
            <td>
                <a href="index.php?controller=enrollment&action=edit&id=<?php echo $row['id']; ?>"
                    class="btn btn-sm btn-warning">Edit</a>
                <a href="index.php?controller=enrollment&action=delete&id=<?php echo $row['id']; ?>"
                    class="btn btn-sm btn-danger"
                    onclick="return confirm('Are you sure you want to delete this enrollment?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        <?php else: ?>
        <tr>
            <td colspan="6" class="text-center">No enrollments found</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>