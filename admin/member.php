<?php include 'database.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Member List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4 text-center">All Members</h2>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Session</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT id, name, email, mobile, session, is_approved FROM member";
            $result = $conn->query($sql);

            if ($result->num_rows > 0):
                while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= htmlspecialchars($row['name']); ?></td>
                <td><?= htmlspecialchars($row['email']); ?></td>
                <td><?= htmlspecialchars($row['mobile']); ?></td>
                <td><?= htmlspecialchars($row['session']); ?></td>
                <td>
                    <?php if ($row['is_approved'] == 0): ?>
                        <a href="approve.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm">Approve</a>
                        <a href="deleteMember.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">Delete</a>
                    <?php else: ?>
                        <span class="badge bg-success">Approved</span>
                    <?php endif; ?>
                </td>
            </tr>
            <?php
                endwhile;
            else:
                echo "<tr><td colspan='6'>No members found.</td></tr>";
            endif;
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
