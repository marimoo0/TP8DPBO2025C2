<h2>Edit Enrollment</h2>

<div class="card">
    <div class="card-body">
        <form action="index.php?controller=enrollment&action=update" method="post">
            <input type="hidden" name="id" value="<?php echo $enrollment['id']; ?>">

            <div class="mb-3">
                <label for="student_id" class="form-label">Student</label>
                <select class="form-select" id="student_id" name="student_id" required>
                    <option value="">Select Student</option>
                    <?php
                    $students->data_seek(0); // Reset the result pointer
                    while ($student = $students->fetch_assoc()):
                    ?>
                    <option value="<?php echo $student['id']; ?>"
                        <?php echo ($student['id'] == $enrollment['student_id']) ? 'selected' : ''; ?>>
                        <?php echo $student['name'] . ' (' . $student['nim'] . ')'; ?>
                    </option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="course_id" class="form-label">Course</label>
                <select class="form-select" id="course_id" name="course_id" required>
                    <option value="">Select Course</option>
                    <?php
                    $courses->data_seek(0); // Reset the result pointer
                    while ($course = $courses->fetch_assoc()):
                    ?>
                    <option value="<?php echo $course['id']; ?>"
                        <?php echo ($course['id'] == $enrollment['course_id']) ? 'selected' : ''; ?>>
                        <?php echo $course['name'] . ' (' . $course['code'] . ')'; ?>
                    </option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control" id="semester" name="semester"
                    value="<?php echo $enrollment['semester']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="grade" class="form-label">Grade (optional)</label>
                <select class="form-select" id="grade" name="grade">
                    <option value="" <?php echo empty($enrollment['grade']) ? 'selected' : ''; ?>>No grade yet</option>
                    <option value="A" <?php echo ($enrollment['grade'] == 'A') ? 'selected' : ''; ?>>A</option>
                    <option value="A-" <?php echo ($enrollment['grade'] == 'A-') ? 'selected' : ''; ?>>A-</option>
                    <option value="B+" <?php echo ($enrollment['grade'] == 'B+') ? 'selected' : ''; ?>>B+</option>
                    <option value="B" <?php echo ($enrollment['grade'] == 'B') ? 'selected' : ''; ?>>B</option>
                    <option value="B-" <?php echo ($enrollment['grade'] == 'B-') ? 'selected' : ''; ?>>B-</option>
                    <option value="C+" <?php echo ($enrollment['grade'] == 'C+') ? 'selected' : ''; ?>>C+</option>
                    <option value="C" <?php echo ($enrollment['grade'] == 'C') ? 'selected' : ''; ?>>C</option>
                    <option value="D" <?php echo ($enrollment['grade'] == 'D') ? 'selected' : ''; ?>>D</option>
                    <option value="E" <?php echo ($enrollment['grade'] == 'E') ? 'selected' : ''; ?>>E</option>
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-warning">Update</button>
                <a href="index.php?controller=enrollment&action=index" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>