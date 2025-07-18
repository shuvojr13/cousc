<?php
require_once "config.php";

// Set how many notices per page
$limit = 5;

// Get the current page number from query string (default: 1)
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;

// Calculate the offset for the SQL LIMIT clause
$offset = ($page - 1) * $limit;

// Get total number of notices
$totalSql = "SELECT COUNT(*) FROM notice";
$totalStmt = $conn->prepare($totalSql);
$totalStmt->execute();
$totalNotices = $totalStmt->fetchColumn();

// Calculate total pages
$totalPages = ceil($totalNotices / $limit);

// Fetch limited notices for current page
$sql = 'SELECT * FROM notice ORDER BY date DESC LIMIT :limit OFFSET :offset';
$stmt = $conn->prepare($sql);
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$notices = $stmt->fetchAll();

// Start container
echo '<div class="container my-4 px-2">';

if (!$notices) {
    echo "<p class='text-center fw-bold bg-light p-3 fs-5 rounded border border-secondary'>No notices found.</p>";
}

foreach ($notices as $notice) {
    echo '<div class="card mb-4 shadow-sm border ">';
    echo '<div class="card-header bg-white text-dark d-flex flex-column flex-md-row justify-content-between">';
    echo '<h3 class="mb-1 fw-bold">' . htmlspecialchars($notice['title']) . '</h3>';
    echo '<small>' . date("h:i A", strtotime($notice['time'])) . ' | ' . date("d M Y", strtotime($notice['date'])) . '</small>';
    echo '</div>';

    echo '<div class="card-body bg-light text-dark">';
    $desc = nl2br(htmlspecialchars($notice['description']));
    $shortDesc = substr($desc, 0, 250);
    $id = 'desc_' . $notice['id'];

    if (strlen($desc) > 250) {
        echo "<p id='$id' class='card-text'>$shortDesc... <a href='javascript:void(0)' class='see-more text-decoration-none' data-id='$id' data-full='" . htmlentities($desc) . "'>See more</a></p>";
    } else {
        echo "<p class='card-text'>$desc</p>";
    }

    if (!empty($notice['images'])) {
        $imageArray = explode(',', $notice['images']);
        echo '<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">';
        foreach ($imageArray as $img) {
            echo '<div class="col">';
            echo '<img src="admin/images/' . trim($img) . '" class="img-fluid border border-secondary rounded w-100" alt="Notice Image">';
            echo '</div>';
        }
        echo '</div>';
    }

    if (!empty($notice['link'])) {
        echo '<a href="' . $notice['link'] . '" class="btn btn-sm btn-outline-dark mt-3" target="_blank">📄 View PDF</a>';
    }

    echo '</div>'; // card-body
    echo '</div>'; // card
}

echo '</div>'; // container

// Pagination links
if ($totalPages > 1) {
    echo '<nav><ul class="pagination justify-content-center m-4 p-2">';
    for ($i = 1; $i <= $totalPages; $i++) {
        $active = $i === $page ? 'active' : '';
        echo "<li class='page-item $active'><a class='page-link' href='?page=$i'>$i</a></li>";
    }
    echo '</ul></nav>';
}
?>
<style>
    .card-text {
        font-size: 0.95rem;
        line-height: 1.5;
    }
    .see-more {
        color: gray;
        cursor: pointer;
    }
    .see-more:hover {
        text-decoration: underline;
    }
    .pagination .page-link {
        color: black;
    }
    .pagination .active .page-link {
        background-color: gray;
        border-color: gray;
        color: white;
    }
    .pagination{
    display:flex;
    justify-content: center;
    align-items: center;
    gap:20px;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const seeMoreLinks = document.querySelectorAll('.see-more');
    seeMoreLinks.forEach(link => {
        link.addEventListener('click', function () {
            const id = this.dataset.id;
            const fullText = this.dataset.full;
            const paragraph = document.getElementById(id);
            if (this.textContent === 'See more') {
                paragraph.innerHTML = fullText + ' <a href="javascript:void(0)" class="see-more text-decoration-none" data-id="' + id + '" data-full="' + fullText + '">See less</a>';
            } else {
                const short = fullText.substring(0, 250);
                paragraph.innerHTML = short + '... <a href="javascript:void(0)" class="see-more text-decoration-none" data-id="' + id + '" data-full="' + fullText + '">See more</a>';
            }

            paragraph.querySelector('.see-more').addEventListener('click', arguments.callee);
        });
    });
});
</script>
