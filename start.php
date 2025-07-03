<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Design?</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f7f7f7;
        background: url("./pictures/Stanford_Univ.webp") center center / cover no-repeat fixed;
        color: #333;
        line-height: 1.6;
        margin: 0;
        padding: 2rem;
    }
    h1, h2, h3 {
        color: #222;
    }
    blockquote {
        border-left: 4px solid #999;
        padding-left: 1rem;
        color: #666;
        font-style: italic;
    }
    code {
        background: #eee;
        padding: 2px 4px;
        border-radius: 4px;
    }
    .section1 {
        background: rgba(255, 255, 255, 0.85); /* 背景のみ透明 */
        padding: 2rem;
        margin-bottom: 2rem;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
        text-align: center;
    }
    .section {
        background: rgba(255, 255, 255, 0.85); /* 背景のみ透明 */
        padding: 1rem;
        margin-bottom: 2rem;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
        text-align: center;
    }
    .en, .ja {
        margin-top: 0.2rem;
        margin-bottom: 0.2rem;
    }
    ul {
        padding-left: 1.5rem;
    }
    a {
        color: #0366d6;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    footer {
        text-align: center;
        font-size: 0.9rem;
        color: #888;
        margin-top: 4rem;
    }
    .cta-button {
        display: inline-block;
        background-color: #0366d6;
        color: white;
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    .cta-button:hover {
        background-color: #024a9c;
    }

    .lesson-buttons {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        margin-top: 1rem;
    }

    .lesson-button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        font-weight: bold;
        text-align: center;
        color: white;
        text-decoration: none;
        transition: transform 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        line-height: 1.2;
        font-size: 0.85rem;
        padding: 0.5rem;
    }

    .lesson-button:hover {
        transform: scale(1.05);
    }

    /* 色バリエーション */
    .journal {
        background-color: #D72638;
    }
    .persona {
        background-color: #3F88C5;
    }
    .define {
        background-color: #F49D37;
    }
    .gacha {
        background-color: #43AA8B;
    }
    .brainstorm {
        background-color: #9d4edd;
    }
    .sketch {
        background-color: #F15BB5;
    }
    .match {
        background-color: #00BBF9;
    }
    .feedback {
        background-color: #3C1642;
    }
    .rebuild {
        background-color: #9ACD32;
    }

    /* ===== スマホ対応レスポンシブ追加 ===== */
    @media (max-width: 600px) {
        body {
            padding: 0.5rem;
        }
        .section {
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 6px;
        }
        h1 {
            font-size: 1.6rem;
        }
        h2 {
            font-size: 1.2rem;
        }
        h3 {
            font-size: 1rem;
        }
        .cta-button {
            width: 100%;
            text-align: center;
            padding: 1rem;
            font-size: 1.1rem;
            border-radius: 8px;
        }
        blockquote {
            font-size: 0.95rem;
            padding-left: 0.5rem;
        }
        footer {
            font-size: 0.8rem;
            padding: 1rem 0;
        }
    }

    .accordion {
        margin: 1em 0;
    }
    .accordion-btn {
        width: 100%;
        background: #e6eefc;
        color: #2c3e50;
        border: none;
        padding: 1em;
        border-radius: 8px;
        font-weight: bold;
        font-size: 1.05rem;
        cursor: pointer;
        transition: background 0.2s;
        box-shadow: 0 1.5px 5px rgba(0,0,0,0.07);
    }
    .accordion-btn:hover,
    .accordion-btn:focus {
        background: #cde1f9;
    }
    .accordion-content {
        display: none;
        padding: 1em 0.8em 0.8em 0.8em;
        background: rgba(255,255,255,0.97);
        border-radius: 0 0 8px 8px;
        font-size: 0.97rem;
        line-height: 1.5;
        text-align: left;
    }
    .accordion.active .accordion-content {
        display: block;
    }


    </style>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="section1">
        <h1>🌏DESIGNING YOUR IDEAL WORLD🌍</h1>
        <h2>—— デザイン思考の5ステップ / The 5 Steps of Design Thinking ——</h2>
            <!-- デザイン思考・アート思考の説明キャッチ -->
            <div class="accordion">
            <button class="accordion-btn" type="button">デザイン思考・アート思考とは？<br>（タップで説明表示）</button>
                <div class="accordion-content">
                    <b>デザイン思考</b>は、「ユーザーの困りごと」を起点に課題を発見し、共感・発想・試作・検証を繰り返して解決策を生み出す方法です。<br>
                    <b>アート思考</b>は、「自分だけの問い」や感性から出発し、自由な発想や表現を重視します。<br>
                    どちらも「自分や他人の“本音”」に向き合うことで、まだ誰も見たことのない“答え”や“価値”を生み出せます。
                    <p>
                    <b>Design Thinking</b> starts from users’ real needs and aims to create solutions through empathy, ideation, prototyping, and testing.<br>
                    <b>Art Thinking</b> is about beginning with your own questions and sensibilities, valuing free expression and originality.<br>
                    Both approaches help you discover new “answers” and “values” by exploring your own and others’ true feelings.</p>
                </div>
            </div>
    </div>

    <div class="section">
        <h2>1. Empathize（共感）</h2>
        <p class="en"><i>See the world through others’ eyes.</i></p>
        <p class="ja">あなた自身や他人の「困りごと」にちゃんと向き合うことから始まる。</p>
        <div class="lesson-buttons">
            <a href="./journal/journal.php" class="lesson-button journal">💛<br>心の<br>デバッグログ</a>
            <a href="./persona.html" class="lesson-button persona">🎭<br>ペルソナ<br>生成ガチャ</a>
        </div>
    </div>

    <div class="section">
        <h2>2. Define（定義）</h2>
        <p class="en"><i>Articulate the real challenge.</i></p>
        <p class="ja">表面的な問題ではなく、根底にあるニーズを見つけて言語化する。</p>
        <div class="lesson-buttons">
            <a href="./define.php" class="lesson-button define">🔍<br>本当の課題<br>チャレンジ</a>
        </div>
    </div>

    <div class="section">
        <h2>3. Ideate（発想）</h2>
        <p class="en"><i>Generate ideas beyond the obvious.</i></p>
        <p class="ja">正解は求めず、とにかく数と多様性で発想を広げる。</p>
        <div class="lesson-buttons">
            <a href="./gacha.html" class="lesson-button gacha">🎲<br>オズボーンの<br>リストガチャ</a>
            <a href="./brainstorm.html" class="lesson-button brainstorm">🧠<br>ブレイン<br>ストーミング</a>
        </div>
    </div>

    <div class="section">
        <h2>4. Prototype（試作）</h2>
        <p class="en"><i>Bring ideas to life — quickly.</i></p>
        <p class="ja">完璧さよりも「カタチにすること」。小さく試してみる勇気。</p>
        <div class="lesson-buttons">
            <a href="./sketch.html" class="lesson-button sketch">✏️<br>スケッチ</a>
            <a href="./match.html" class="lesson-button match">🫱🏻‍🫲🏼<br>企業と<br>マッチング</a>
        </div>
    </div>

    <div class="section">
        <h2>5. Test（検証）</h2>
        <p class="en"><i>Learn from feedback and refine.</i></p>
        <p class="ja">現実との対話から得た「違和感」は、次のデザインの種。</p>
        <div class="lesson-buttons">
            <a href="./feedback.html" class="lesson-button feedback">💬<br>フィード<br>バック</a>
            <a href="./rebuild.html" class="lesson-button rebuild">📈<br>リビルド<br>ログ</a>
        </div>
    </div>

    <script>
    document.querySelectorAll('.accordion-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const acc = this.parentElement;
            acc.classList.toggle('active');
        });
    });
    </script>

</body>
</html>