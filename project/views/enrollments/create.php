<h2>Create New Enrollment</h2>

<div class="card">
    <div class="card-body">
        <form action="index.php?controller=enrollment&action=store" method="post">
            <div class="mb-3">
                <label for="student_id" class="form-label">Student</label>
                <select class="form-select" id="student_id" name="student_id" required>
                    <option value="">Select Student</option>
                    <?php while ($student = $students->fetch_assoc()): ?>
                    <option value="<?php echo $student['id']; ?>">
                        <?php echo $student['name'] . ' (' . $student['nim'] . ')'; ?>
                    </option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="course_id" class="form-label">Course</label>
                <select class="form-select" id="course_id" name="course_id" required>
                    <option value="">Select Course</option>
                    <?php while ($course = $courses->fetch_assoc()): ?>
                    <option value="<?php echo $course['id']; ?>">
                        <?php echo $course['name'] . ' (' . $course['code'] . ')'; ?>
                    </option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control" id="semester" name="semester" placeholder="e.g. 2024/2025-1"
                    required>
            </div>

            <div class="mb-3">
                <label for="grade" class="form-label">Grade (optional)</label>
                <select class="form-select" id="grade" name="grade">
                    <option value="">No grade yet</option>
                    <option value="A">A</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B">B</option>
                    <option value="B-">B-</option>
                    <option value="C+">C+</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="index.php?controller=enrollment&action=index" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>