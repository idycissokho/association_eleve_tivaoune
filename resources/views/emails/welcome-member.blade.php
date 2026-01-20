<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue dans l'Association AELT 93-97</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8fafc; }
        .container { max-width: 600px; margin: 0 auto; background: white; }
        .header { background: linear-gradient(135deg, #1e40af, #f59e0b); padding: 40px 30px; text-align: center; }
        .logo { width: 80px; height: 80px; background: rgba(255,255,255,0.2); border-radius: 20px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; }
        .logo span { color: white; font-size: 32px; font-weight: bold; }
        .header h1 { color: white; font-size: 28px; margin-bottom: 10px; }
        .header p { color: rgba(255,255,255,0.9); font-size: 16px; }
        .content { padding: 40px 30px; }
        .welcome-box { background: linear-gradient(145deg, #f8fafc, #e2e8f0); border-radius: 16px; padding: 30px; margin-bottom: 30px; border-left: 4px solid #f59e0b; }
        .credentials { background: #1e40af; color: white; padding: 25px; border-radius: 12px; margin: 25px 0; }
        .credentials h3 { margin-bottom: 15px; color: #fbbf24; }
        .credential-item { margin: 10px 0; padding: 8px 0; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .credential-item:last-child { border-bottom: none; }
        .role-badge { display: inline-block; background: #f59e0b; color: white; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: bold; text-transform: uppercase; }
        .footer { background: #1f2937; color: white; padding: 30px; text-align: center; }
        .social-links { margin: 20px 0; }
        .social-links a { color: #fbbf24; text-decoration: none; margin: 0 10px; }
        .btn { display: inline-block; background: linear-gradient(135deg, #f59e0b, #d97706); color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: bold; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="logo">
                <span>LT</span>
            </div>
            <h1>Bienvenue dans notre famille !</h1>
            <p>Association des Anciens Élèves du Lycée de Tivaouane</p>
            <p><strong>Génération 1993-1997</strong></p>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="welcome-box">
                <h2 style="color: #1e40af; margin-bottom: 15px;">🎉 Félicitations {{ $user->name }} !</h2>
                <p style="line-height: 1.6; color: #4b5563;">
                    Nous sommes ravis de vous accueillir en tant que nouveau membre de notre association. 
                    Votre compte a été créé avec succès et vous pouvez maintenant accéder à tous nos services.
                </p>
                <span class="role-badge">{{ ucfirst($role) }}</span>
            </div>

            <div class="credentials">
                <h3>🔐 Vos identifiants de connexion</h3>
                <div class="credential-item">
                    <strong>Email :</strong> {{ $user->email }}
                </div>
                <div class="credential-item">
                    <strong>Mot de passe :</strong> {{ $password }}
                </div>
                <div class="credential-item">
                    <strong>Rôle :</strong> {{ ucfirst($role) }}
                </div>
            </div>

            <div style="text-align: center;">
                <a href="{{ config('app.url') }}/connexion" class="btn">
                    🚀 Accéder à mon compte
                </a>
            </div>

            <div style="background: #fef3c7; border: 1px solid #f59e0b; border-radius: 8px; padding: 20px; margin: 25px 0;">
                <h4 style="color: #92400e; margin-bottom: 10px;">📋 Prochaines étapes :</h4>
                <ul style="color: #92400e; padding-left: 20px;">
                    <li>Connectez-vous avec vos identifiants</li>
                    <li>Complétez votre profil</li>
                    <li>Découvrez nos actualités et événements</li>
                    <li>Rejoignez notre communauté active</li>
                </ul>
            </div>

            <p style="color: #6b7280; line-height: 1.6;">
                Si vous avez des questions ou besoin d'aide, n'hésitez pas à nous contacter. 
                Notre équipe est là pour vous accompagner dans cette nouvelle aventure.
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <h3 style="color: #fbbf24; margin-bottom: 15px;">Association AELT 93-97</h3>
            <p style="margin-bottom: 10px;">Ensemble, construisons l'avenir</p>
            
            <div class="social-links">
                <a href="mailto:contact@gen9397.com">📧 contact@gen9397.com</a>
            </div>
            
            <p style="font-size: 12px; color: #9ca3af; margin-top: 20px;">
                © {{ date('Y') }} Association des Anciens Élèves du Lycée de Tivaouane. Tous droits réservés.
            </p>
        </div>
    </div>
</body>
</html>