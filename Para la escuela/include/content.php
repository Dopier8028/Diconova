<section class="section section-lg bg-default">
    <div class="container">
        <div class="row row-30 flex-lg-row-reverse justify-content-between">
            <div class="col-lg-4"></div>
            <div class="col-lg-7">
                <ul class="list-type-1">
                    <li>
                    <h1><span class="text-light"><?php echo htmlspecialchars($projectTitle, ENT_QUOTES, 'UTF-8'); ?></span></h1>
                        <p class="big"></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="gallery-margin">
    <div class="gallery">
        <?php foreach ($galleryImages as $index => $image): ?>
            <img src="<?php echo $image; ?>" alt="Imagen <?php echo $index + 1; ?>" onclick="openModal(<?php echo $index; ?>)">
        <?php endforeach; ?>
    </div>
</div>
</div>

<script>
    const images = <?php echo json_encode($galleryImages); ?>;  // Convertimos el array PHP en un array JavaScript
</script>



    <!-- Modal -->
    <div id="modal" class="modal" onclick="closeModal(event)">
        <span class="close" onclick="closeModal(event)">&times;</span>
        <span class="prev" onclick="prevImage()">&lt;</span>
        <img id="modalImage" src="" alt="Imagen Modal">
        <span class="next" onclick="nextImage()">&gt;</span>
    </div>

</section>
