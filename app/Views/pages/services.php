 <section class="hero-strip py-5 services text-white">
     <div class="container text-center ">
         <div class="features-heading">
             <h1 class="fw-bold hero-features-title">
                 <?= esc($services['title']) ?>

                 <span class="badge hero-badge">
                     <img src="<?= base_url($services['badge']) ?>" alt="">
                 </span>
             </h1>
         </div>
         <ul class="list-unstyled d-flex justify-content-center gap-4 mt-4 flex-wrap features">
             <?php foreach ($services['features'] as $feature): ?>
                 <li class="small text-white">
                     <span aria-hidden="true"># </span>
                     <?= esc($feature) ?>
                 </li>
             <?php endforeach; ?>
         </ul>
     </div>
 </section>