pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                git 'https://github.com/israel206/jenkins-2.git'
                sh 'composer install'
                // sh 'cp .env.example .env'
                // sh 'php artisan key:generate'
            }
        }
        stage('Test') {
            steps {
                sh './vendor/bin/phpunit'
            }
        }
        stage('Finished msg') {
            steps {
                withCredentials(([string(credentialsId: 'telegramToken', variable: 'TOKEN'),
                    string(credentialsId: 'telegramChatId', variable: 'CHAT_ID')])) {
                        sh 'curl -s -X POST https://api.telegram.org/bot${TOKEN}/sendMessage -d "chat_id=${CHAT_ID}"  -d text=" ✅ Construção(Build) aceita com sucesso! 😊"'
                }
            }
        }
    }
}