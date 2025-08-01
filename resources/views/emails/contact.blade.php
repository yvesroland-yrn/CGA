<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Message de contact</title>
<style>
  /* RESET BASIQUE */
  *, *::before, *::after {
    box-sizing: border-box;
  }
  body {
    margin: 0; padding: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #e9f0f7 0%, #f8fafc 100%);
    color: #2b3a4a;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  /* CONTENEUR PRINCIPAL */
  .container {
    background: #fff;
    max-width: 620px;
    margin: 2rem auto;
    padding: 32px 40px;
    border-radius: 16px;
    box-shadow:
      0 12px 24px rgba(0,0,0,0.1),
      0 0 8px rgba(52, 152, 219, 0.15);
    transition: box-shadow 0.3s ease;
  }
  .container:hover {
    box-shadow:
      0 20px 40px rgba(0,0,0,0.15),
      0 0 12px rgba(52, 152, 219, 0.3);
  }
  /* TITRE */
  h2 {
    margin: 0 0 24px 0;
    font-weight: 700;
    font-size: 1.9rem;
    color: #1B2838;
    border-bottom: 3px solid #3498DB;
    padding-bottom: 12px;
    display: inline-block;
    user-select: none;
  }
  /* PARAGRAPHES */
  p {
    margin: 16px 0;
    font-size: 1.125rem;
    line-height: 1.6;
    letter-spacing: 0.02em;
  }
  strong {
    color: #2C3E50;
    font-weight: 600;
  }
  /* LISTE DES INFOS */
  .info-group {
    margin-bottom: 24px;
  }
  /* ZONE MESSAGE */
  .message-content {
    background: #f5f8fc;
    border-left: 4px solid #3498DB;
    padding: 18px 24px;
    border-radius: 8px;
    font-style: italic;
    white-space: pre-wrap; /* conserve les retours à la ligne */
    box-shadow:
      inset 0 0 10px rgba(52, 152, 219, 0.1);
  }
  /* FOOTER */
  .footer {
    text-align: center;
    font-size: 0.875rem;
    color: #888ea8;
    margin-top: 40px;
    font-style: italic;
    letter-spacing: 0.04em;
  }
  /* RESPONSIVE */
  @media (max-width: 700px) {
    body {
      padding: 10px;
    }
    .container {
      padding: 24px 20px;
      margin: 1rem auto;
    }
    h2 {
      font-size: 1.6rem;
      padding-bottom: 8px;
    }
    p {
      font-size: 1rem;
    }
  }
  /* Animation légère d'entrée */
  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(15px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .container {
    animation: fadeInUp 0.6s ease forwards;
  }
</style>
</head>
<body>
  <div class="container" role="main" aria-label="Message de contact reçu">
    <h2>📬 Nouveau message de contact</h2>
    <div class="info-group">
      <p><strong>Nom :</strong> {{ $nom }}</p>
      <p><strong>Email :</strong> <a href="mailto:{{ $email }}" style="color:#3498DB; text-decoration:none;" aria-label="Envoyer un email à {{ $email }}">{{ $email }}</a></p>
    </div>
    <div class="info-group">
      <p><strong>Message :</strong></p>
      <div class="message-content" aria-label="Contenu du message">
        {{ $contenu }}
      </div>
    </div>
  </div>
  <div class="footer" aria-hidden="true">
    Cet email a été généré automatiquement depuis le formulaire de contact du site CGA.
  </div>
</body>
</html>
