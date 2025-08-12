<?php
$experiences = [
    [
        'title' => 'Assistant Project Programmer',
        'period' => '2024 - 2025',
        'details' => 'Programmed and help developed a System at STI
                      West Negros University, A Student subject
                      Evaluation for advising subjects to the student of
                      STI West Negros University'
    ],

];
?>
<section id="experience" class="card">
    <h2>Experience</h2>
    <?php foreach ($experiences as $exp): ?>
        <div class="item">
            <h3><?php echo htmlspecialchars($exp['title']); ?></h3>
            <span class="period"><?php echo htmlspecialchars($exp['period']); ?></span>
            <p><?php echo htmlspecialchars($exp['details']); ?></p>
        </div>
    <?php endforeach; ?>
</section>