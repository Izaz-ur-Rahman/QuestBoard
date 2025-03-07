<div class="container">
    <h3 class="section-title">Community Answers</h3>

    <?php
    include("./common/db.php");
    $question_id = $qid;
    $query = "SELECT * FROM answers WHERE question_id = $question_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        foreach ($result as $row) {
            $answer = htmlspecialchars($row['answer']); // Prevent XSS
            echo "
                <div class='answer-card'>
                    <div class='answer-content'>
                        <h6 class='answer-title'>User Response</h6>
                        <p class='answer-text'>$answer</p>
                    </div>
                </div>
            ";
        }
    } else {
        echo "<p class='no-answers'>No answers yet. Be the first to contribute!</p>";
    }
    ?>
</div>

<style>
    /* 🌟 Base Styles */
    .container {
        max-width: 850px;
        background: #fff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin: auto;
        transition: 0.3s ease-in-out;
    }

    /* ✅ Section Title */
    .section-title {
        font-size: 2.8rem !important;
        font-weight: bold;
        border-left: 5px solid #007bff;
        padding-left: 14px;
        color: #222;
        margin-bottom: 20px;
    }

    /* 💬 Answer Card */
    .answer-card {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 15px 18px;
        margin-bottom: 15px;
        border-left: 5px solid #007bff;
        transition: all 0.3s ease-in-out;
    }

    .answer-card:hover {
        background: #ffffff;
        transform: translateY(-3px);
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.12);
    }

    /* 🎯 Answer Content */
    .answer-title {
        font-size: 1rem;
        font-weight: 600;
        color: #007bff;
        margin-bottom: 5px;
    }

    .answer-text {
        font-size: 1.1rem;
        color: #333;
        line-height: 1.6;
    }

    /* ℹ️ No Answers Message */
    .no-answers {
        font-size: 1.1rem;
        font-style: italic;
        background: #f0f0f0;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
    }

    /* 📱 Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 15px;
            max-width: 95%;
        }

        .section-title {
            font-size: 1.5rem;
        }

        .answer-card {
            padding: 12px 15px;
        }

        .answer-text {
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 10px;
        }

        .section-title {
            font-size: 2.3rem;
            padding-left: 10px;
        }

        .answer-card {
            padding: 10px 12px;
        }

        .answer-text {
            font-size: 1.95rem;
        }
    }
</style>
