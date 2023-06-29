<?= $this->extend('Template/Template'); ?>

<?= $this->section('content'); ?>
<div class="pembuka">
    <h1>Hello World!</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione omnis maxime exercitationem adipisci,
        repudiandae ea? Nulla atque, corporis, veniam earum modi magni similique sint quaerat tempore quia
        deleniti ab et? Lorem ipsum
        dolor, sit amet consectetur adipisicing elit. Expedita, voluptatum.
    </p>
    <button>Learn More &#187;</button>
</div>
<div class="content-container">
    <div class="left-container">
        <div class="card-container">
            <ul class="cardlist">
                <li class="card">
                    <div class="img"></div>
                    <h5>Heading</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <button>View details</button>
                </li>
                <li class="card">
                    <div class="img"></div>
                    <h5>Heading</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <button class="button">View details</button>
                </li>
                <li class="card">
                    <div class="img"></div>
                    <h5>Heading</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <button class="button">View details</button>
                </li>
            </ul>
        </div>

        <div class="article-container">
            <article>
                <h2><a href="#"> Frist Article Heading</a></h2>
                <div class="article-content article1">
                    <div class="img"></div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe beatae consequatur
                        possimus fuga consequuntur adipisci deleniti, assumenda sint id illo iure fugiat non
                        autem aperiam necessitatibus quas in, tempore ullam
                        placeat eaque consectetur? In tenetur soluta optio, eaque, iusto voluptates ad, fuga
                        dolorum assumenda obcaecati mollitia ullam tempore omnis nam?
                    </p>
                </div>
            </article>
            <article>
                <h2><a href="#"> Second Article Heading</a></h2>
                <div class="article-content article2">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe beatae consequatur
                        possimus fuga consequuntur adipisci deleniti, assumenda sint id illo iure fugiat non
                        autem aperiam necessitatibus quas in, tempore ullam
                        placeat eaque consectetur? In tenetur soluta optio, eaque, iusto voluptates ad, fuga
                        dolorum assumenda obcaecati mollitia ullam tempore omnis nam?
                    </p>
                    <div class="img"></div>
                </div>
            </article>
        </div>
    </div>
    <!-- <div class="right-container">
        <ul class="widget-header">
            <h3>Widget Header</h3>
            <li>Widget Link</li>
            <li>Widget Link</li>
            <li>Widget Link</li>
            <li>Widget Link</li>
            <li>Widget Link</li>
        </ul>
        <div class="widget-header">
            <h3>Widget Header</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sequi ab temporibus, perferendis
                nulla nesciunt beatae blanditiis omnis rerum placeat tempore aut! Molestiae esse voluptatem
                consequatur aliquam quia placeat magni
                expedita exercitationem, dolores rerum aspernatur sequi assumenda ab rem, provident fugiat
                excepturi alias dolor quisquam officiis facilis omnis, labore commodi!
            </p>
        </div>
    </div> -->
</div>
<!-- pr Cari cara agar banner Hello World bisa ada seperti yang di inginkan -->
<?= $this->endSection(); ?>