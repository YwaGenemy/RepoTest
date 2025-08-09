<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XPCLIENT V2 - Лучший клиент для комфортной игры</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="navbar-brand">XPCLIENT V2</a>
            <div class="nav-links">
                <a href="#support" target="_blank"><i class="fas fa-headset"></i> Поддержка</a>
                <a href="#money"><i class="fas fa-money-bill"></i> Деньги за видео</a>
                <a href="#buy"><i class="fas fa-shopping-bag"></i> Купить</a>
                <button class="btn-gradient" onclick="openAuthModal()">Авторизация</button>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>О нас</h1>
                <p>Мы предоставляем вам лучший клиент для комфортной игры, который даст вам наилучшие впечатления от игры.</p>
                <div class="hero-buttons">
                    <a href="#buy" class="btn-gradient"><i class="fas fa-shopping-bag"></i> Купить</a>
                    <a href="#discord" class="btn-dark">Подробнее <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits">
        <div class="benefits-title">
            <h1>Наши преимущества</h1>
            <p>Мы кратко изложили вам то, что вы гарантированно получите после покупки нашего клиента.</p>
        </div>
        <div class="benefits-grid">
            <div class="benefit">
                <div class="benefit-header">
                    <i class="fas fa-eye"></i> Красивый внешний вид
                </div>
                <p>В нашем клиенте присутствует большое количество визуальных функций, которые сделают вашу игру более красочной.</p>
            </div>
            <div class="benefit">
                <div class="benefit-header">
                    <i class="fas fa-sliders-h"></i> Настраиваемость
                </div>
                <p>В нашем клиенте вы можете настроить практически любую функцию под себя, а так же использовать конфигурации других пользователей.</p>
            </div>
            <div class="benefit">
                <div class="benefit-header">
                    <i class="fas fa-tachometer-alt"></i> Оптимизация
                </div>
                <p>Мы постоянно улучшаем оптимизацию нашего клиента и самой игры. Благодаря этому вы сможете запустить наш клиент даже на слабых компьютерах.</p>
            </div>
            <div class="benefit">
                <div class="benefit-header">
                    <i class="fas fa-sync"></i> Частые обновления
                </div>
                <p>Мы регулярно обновляем функционал в нашем клиенте, добавляя новые функции, а так же совершенствуя уже существующие.</p>
            </div>
            <div class="benefit">
                <div class="benefit-header">
                    <i class="fas fa-headset"></i> Лучшая поддержка
                </div>
                <p>У нас самая лучшая поддержка, которая разбирается в своём деле и сможет помочь вам по любому вопросу связанному с нашим клиентом.</p>
            </div>
        </div>
    </section>

    <section class="video-section">
        <h1>Видеообзор</h1>
        <p>Ниже вы можете посмотреть небольшой геймплей с нашим клиентом.</p>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/_WvoEudQWg0" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <section class="stats">
        <div class="stat">
            <i class="fas fa-users"></i>
            <p>256354</p>
            <span>Пользователей</span>
        </div>
        <div class="stat">
            <i class="fas fa-play-circle"></i>
            <p>8552645</p>
            <span>Запусков клиента</span>
        </div>
        <div class="stat">
            <i class="fas fa-sync"></i>
            <p>1089</p>
            <span>Обновлений вышло</span>
        </div>
        <div class="stat">
            <i class="fas fa-calendar-alt"></i>
            <p>1086</p>
            <span>Дней с открытия</span>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>XPCLIENT V2</h3>
                <p>Лучший клиент для комфортной игры</p>
            </div>
            <div class="footer-section">
                <h3>Навигация</h3>
                <a href="#">Главная</a>
                <a href="#buy">Купить</a>
                <a href="#support">Поддержка</a>
            </div>
            <div class="footer-section">
                <h3>Правовая информация</h3>
                <a href="#data">Обработка персональных данных</a>
                <a href="#eula">Пользовательское соглашение</a>
                <a href="#rules">Правила пользования</a>
            </div>
            <div class="footer-section">
                <p>Почта для связи: ntfhelp@mail.ru</p>
                <p>ПН-ПТ 10:00-18:00 МСК</p>
            </div>
        </div>
    </footer>

    <!-- Auth Modal -->
    <div id="authModal" class="modal">
        <div class="modal-content">
            <div class="modal-tabs">
                <div class="tab active" onclick="switchTab('login')">Вход</div>
                <div class="tab" onclick="switchTab('register')">Регистрация</div>
            </div>
            <form id="loginForm" style="display: block;">
                <div class="form-group">
                    <label>Логин</label>
                    <input type="text" id="loginUsername" required>
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input type="password" id="loginPassword" required>
                </div>
                <button type="submit" class="btn-gradient" style="width: 100%;">Войти</button>
            </form>
            <form id="registerForm" style="display: none;">
                <div class="form-group">
                    <label>Логин</label>
                    <input type="text" id="regUsername" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="regEmail" required>
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input type="password" id="regPassword" required>
                </div>
                <button type="submit" class="btn-gradient" style="width: 100%;">Зарегистрироваться</button>
            </form>
        </div>
    </div>

    <!-- User Panel -->
    <div id="userPanel" class="user-panel">
        <div class="user-info">
            <h2 id="userGreeting">Привет, пользователь!</h2>
            <div class="info-grid">
                <div class="info-item">
                    <span>UID</span>
                    <strong id="userUID">-</strong>
                </div>
                <div class="info-item">
                    <span>Логин</span>
                    <strong id="userLogin">-</strong>
                </div>
                <div class="info-item">
                    <span>Группа</span>
                    <strong>Пользователь</strong>
                </div>
                <div class="info-item">
                    <span>Дата регистрации</span>
                    <strong id="regDate">-</strong>
                </div>
                <div class="info-item">
                    <span>Последний вход</span>
                    <strong id="lastLogin">-</strong>
                </div>
                <div class="info-item">
                    <span>E-mail</span>
                    <strong id="userEmail">-</strong>
                </div>
                <div class="info-item">
                    <span>HWID</span>
                    <strong>NOT SET</strong>
                </div>
            </div>
        </div>

        <div class="user-info">
            <h2>Активация ключа</h2>
            <div class="form-group">
                <input type="text" id="licenseKey" placeholder="Введите ключ">
                <button class="btn-gradient" onclick="activateKey()">Активировать</button>
            </div>
        </div>

        <div class="user-info">
            <h2>Клиент</h2>
            <button id="buyBtn" class="btn-gradient" onclick="showBuyOptions()">Купить клиент</button>
            <a id="downloadBtn" href="loader.exe" download class="btn-gradient download-btn" style="display: none;">
                <i class="fas fa-download"></i> Скачать клиент
            </a>
        </div>
    </div>

    <script>
        let currentUser = null;

        function openAuthModal() {
            document.getElementById('authModal').style.display = 'flex';
        }

        function closeAuthModal() {
            document.getElementById('authModal').style.display = 'none';
        }

        function switchTab(tab) {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const tabs = document.querySelectorAll('.tab');

            tabs.forEach(t => t.classList.remove('active'));
            event.target.classList.add('active');

            if (tab === 'login') {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
            } else {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
            }
        }

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const username = document.getElementById('regUsername').value;
            const email = document.getElementById('regEmail').value;
            const password = document.getElementById('regPassword').value;

            currentUser = {
                username: username,
                email: email,
                uid: Math.floor(Math.random() * 10000) + 1,
                regDate: new Date().toLocaleDateString(),
                lastLogin: new Date().toLocaleDateString()
            };

            localStorage.setItem('currentUser', JSON.stringify(currentUser));
            showUserPanel();
            closeAuthModal();
        });

        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const username = document.getElementById('loginUsername').value;
            const password = document.getElementById('loginPassword').value;

            const storedUser = localStorage.getItem('currentUser');
            if (storedUser) {
                currentUser = JSON.parse(storedUser);
                if (currentUser.username === username) {
                    currentUser.lastLogin = new Date().toLocaleDateString();
                    localStorage.setItem('currentUser', JSON.stringify(currentUser));
                    showUserPanel();
                    closeAuthModal();
                }
            }
        });

        function showUserPanel() {
            document.querySelector('.hero').style.display = 'none';
            document.querySelector('.benefits').style.display = 'none';
            document.querySelector('.video-section').style.display = 'none';
            document.querySelector('.stats').style.display = 'none';
            document.querySelector('footer').style.display = 'none';
            document.getElementById('userPanel').style.display = 'block';

            if (currentUser) {
                document.getElementById('userGreeting').textContent = `Привет, ${currentUser.username}!`;
                document.getElementById('userUID').textContent = currentUser.uid;
                document.getElementById('userLogin').textContent = currentUser.username;
                document.getElementById('regDate').textContent = currentUser.regDate;
                document.getElementById('lastLogin').textContent = currentUser.lastLogin;
                document.getElementById('userEmail').textContent = currentUser.email;
            }
        }

        function activateKey() {
            const key = document.getElementById('licenseKey').value;
            if (key === 'Really') {
                alert('Ключ активирован! Подписка активна на 30 дней.');
                document.getElementById('buyBtn').style.display = 'none';
                document.getElementById('downloadBtn').style.display = 'inline-block';
            } else {
                alert('Неверный ключ!');
            }
        }

        function showBuyOptions() {
            alert('Для покупки клиента обратитесь в поддержку: ntfhelp@mail.ru');
        }

        window.onclick = function(event) {
            const modal = document.getElementById('authModal');
            if (event.target === modal) {
                closeAuthModal();
            }
        }

        window.onload = function() {
            const storedUser = localStorage.getItem('currentUser');
            if (storedUser) {
                currentUser = JSON.parse(storedUser);
                showUserPanel();
            }
        }
    </script>
</body>
</html>