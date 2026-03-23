<?php

/* Template Name: php-home */

get_header();
?>

<style>
:root {
    --primary-color: #667eea;
    --secondary-color: #764ba2;
    --accent-color: #f093fb;
    --text-dark: #2d3748;
    --text-light: #718096;
    --bg-light: #f7fafc;
    --white: #ffffff;
    --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.ismme-hero {
    background: var(--gradient);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    color: var(--white);
}

.hero-particles {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.particle {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    animation: float 15s infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateY(-100vh) rotate(720deg); opacity: 0; }
}

.hero-content {
    text-align: center;
    z-index: 2;
    padding: 2rem;
    max-width: 900px;
}

.hero-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    margin-bottom: 1.5rem;
    font-size: 0.9rem;
    backdrop-filter: blur(10px);
    animation: fadeInDown 1s ease;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    line-height: 1.2;
    animation: fadeInUp 1s ease 0.2s both;
}

.hero-subtitle {
    font-size: 1.5rem;
    margin-bottom: 2rem;
    opacity: 0.95;
    animation: fadeInUp 1s ease 0.4s both;
}

.hero-description {
    font-size: 1.1rem;
    margin-bottom: 2.5rem;
    opacity: 0.9;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    animation: fadeInUp 1s ease 0.6s both;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
    animation: fadeInUp 1s ease 0.8s both;
}

.btn {
    padding: 1rem 2.5rem;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
    border: none;
    cursor: pointer;
    font-size: 1rem;
}

.btn-primary {
    background: var(--white);
    color: var(--primary-color);
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.3);
}

.btn-secondary {
    background: transparent;
    color: var(--white);
    border: 2px solid var(--white);
}

.btn-secondary:hover {
    background: var(--white);
    color: var(--primary-color);
}

@keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Features Section */
.ismme-features {
    padding: 6rem 2rem;
    background: var(--bg-light);
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    color: var(--text-dark);
    margin-bottom: 1rem;
}

.section-subtitle {
    text-align: center;
    color: var(--text-light);
    margin-bottom: 4rem;
    font-size: 1.1rem;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

.feature-card {
    background: var(--white);
    padding: 2.5rem;
    border-radius: 20px;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.2);
}

.feature-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 1.5rem;
    background: var(--gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
}

.feature-title {
    font-size: 1.3rem;
    color: var(--text-dark);
    margin-bottom: 1rem;
}

.feature-text {
    color: var(--text-light);
    line-height: 1.6;
}

/* News Section */
.ismme-news {
    padding: 6rem 2rem;
    background: var(--white);
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

.news-card {
    background: var(--white);
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.news-image {
    width: 100%;
    height: 220px;
    background: var(--gradient);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 3rem;
}

.news-content {
    padding: 1.5rem;
}

.news-date {
    color: var(--primary-color);
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.news-title {
    font-size: 1.2rem;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
}

.news-excerpt {
    color: var(--text-light);
    line-height: 1.6;
}

/* Careers Section */
.ismme-careers {
    padding: 6rem 2rem;
    background: var(--gradient);
    color: var(--white);
}

.ismme-careers .section-title,
.ismme-careers .section-subtitle {
    color: var(--white);
}

.careers-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    max-width: 1000px;
    margin: 0 auto;
}

.career-item {
    text-align: center;
    padding: 2rem;
    background: rgba(255,255,255,0.1);
    border-radius: 15px;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

.career-item:hover {
    background: rgba(255,255,255,0.2);
    transform: scale(1.05);
}

.career-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.career-title {
    font-size: 1.1rem;
    font-weight: 600;
}

/* Partners Section */
.ismme-partners {
    padding: 6rem 2rem;
    background: var(--bg-light);
}

.partners-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 2rem;
    max-width: 1000px;
    margin: 0 auto;
    align-items: center;
}

.partner-logo {
    background: var(--white);
    padding: 2rem;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    color: var(--text-light);
}

.partner-logo:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

/* CTA Section */
.ismme-cta {
    padding: 5rem 2rem;
    background: var(--white);
    text-align: center;
}

.cta-box {
    max-width: 800px;
    margin: 0 auto;
    padding: 3rem;
    background: var(--gradient);
    border-radius: 20px;
    color: var(--white);
}

.cta-title {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.cta-text {
    margin-bottom: 2rem;
    opacity: 0.95;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-title { font-size: 2.5rem; }
    .hero-subtitle { font-size: 1.2rem; }
    .section-title { font-size: 2rem; }
    .news-grid { grid-template-columns: 1fr; }
}
</style>

<section class="ismme-hero">
    <div class="hero-particles" id="particles"></div>
    <div class="hero-content">
        <div class="hero-badge">Кафедра ИСММЭ ПГНИУ</div>
        <h1 class="hero-title">Информационные системы и математические методы в экономике</h1>
        <p class="hero-subtitle">Готовим IT-специалистов нового поколения</p>
        <p class="hero-description">
            Современные образовательные программы, сильные преподаватели, 
            партнёрство с ведущими компаниями и реальные проекты уже во время обучения
        </p>
        <div class="hero-buttons">
            <a href="/bakalavriat" class="btn btn-primary">Бакалавриат</a>
            <a href="/magistratura" class="btn btn-secondary">Магистратура</a>
            <a href="/napravleniya" class="btn btn-secondary">Направления подготовки</a>
        </div>
    </div>
</section>

<section class="ismme-features">
    <h2 class="section-title">Почему выбирают нас?</h2>
    <p class="section-subtitle">Мы создаём условия для вашего успеха</p>
    
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon">💻</div>
            <h3 class="feature-title">Современные технологии</h3>
            <p class="feature-text">Изучайте актуальные языки программирования, фреймворки и инструменты разработки</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon">👨‍🏫</div>
            <h3 class="feature-title">Опытные преподаватели</h3>
            <p class="feature-text">Преподаватели-практики с опытом работы в IT-индустрии</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon">🎯</div>
            <h3 class="feature-title">Практика с 1 курса</h3>
            <p class="feature-text">Реальные проекты и стажировки в компаниях-партнёрах</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon">🚀</div>
            <h3 class="feature-title">Трудоустройство</h3>
            <p class="feature-text">Помогаем с трудоустройством, 90% выпускников работают по специальности</p>
        </div>
    </div>
</section>

<section class="ismme-news">
    <h2 class="section-title">Новости кафедры</h2>
    <p class="section-subtitle">Будьте в курсе событий</p>
    
    <div class="news-grid">
        <?php
        $news_args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'category_name' => 'news'
        );
        $news_query = new WP_Query($news_args);
        
        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post();
        ?>
        <article class="news-card">
            <div class="news-image">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium', array('style' => 'width:100%; height:100%; object-fit:cover;')); ?>
                <?php else : ?>
                    <span>📰</span>
                <?php endif; ?>
            </div>
            <div class="news-content">
                <div class="news-date"><?php echo get_the_date(); ?></div>
                <h3 class="news-title"><?php the_title(); ?></h3>
                <p class="news-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            </div>
        </article>
        <?php 
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
    
    <div style="text-align: center; margin-top: 3rem;">
        <a href="/news" class="btn btn-primary">Все новости</a>
    </div>
</section>

<section class="ismme-careers">
    <h2 class="section-title">Кем вы сможете работать?</h2>
    <p class="section-subtitle">Наши выпускники востребованы на рынке труда</p>
    
    <div class="careers-grid">
        <div class="career-item">
            <div class="career-icon">👨‍💻</div>
            <div class="career-title">Разработчик ПО</div>
        </div>
        <div class="career-item">
            <div class="career-icon">📊</div>
            <div class="career-title">Аналитик данных</div>
        </div>
        <div class="career-item">
            <div class="career-icon">🔐</div>
            <div class="career-title">IT-консультант</div>
        </div>
        <div class="career-item">
            <div class="career-icon">🌐</div>
            <div class="career-title">Веб-разработчик</div>
        </div>
        <div class="career-item">
            <div class="career-icon">📱</div>
            <div class="career-title">Mobile Developer</div>
        </div>
        <div class="career-item">
            <div class="career-icon">🤖</div>
            <div class="career-title">Data Scientist</div>
        </div>
    </div>
</section>

<section class="ismme-partners">
    <h2 class="section-title">Наши партнёры</h2>
    <p class="section-subtitle">Компании, где проходят практику и работают наши выпускники</p>
    
    <div class="partners-grid">
        <div class="partner-logo">Яндекс</div>
        <div class="partner-logo">СберТех</div>
        <div class="partner-logo">Тинькофф</div>
        <div class="partner-logo">VK</div>
        <div class="partner-logo">Kaspersky</div>
        <div class="partner-logo">1С</div>
    </div>
</section>

<section class="ismme-cta">
    <div class="cta-box">
        <h2 class="cta-title">Готовы начать свой путь в IT?</h2>
        <p class="cta-text">Подавайте документы и станьте частью нашей команды!</p>
        <a href="/postupayuschim" class="btn btn-primary">Информация для поступающих</a>
    </div>
</section>

<script>
// Create floating particles
function createParticles() {
    const container = document.getElementById('particles');
    const particleCount = 20;
    
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        const size = Math.random() * 60 + 20;
        particle.style.width = size + 'px';
        particle.style.height = size + 'px';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 15 + 's';
        particle.style.animationDuration = (Math.random() * 10 + 15) + 's';
        container.appendChild(particle);
    }
}

createParticles();

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});
</script>

<?php get_footer(); ?>