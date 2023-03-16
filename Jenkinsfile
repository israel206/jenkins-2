#!usr/bin/env groovy
pipeline {
    agent any

    stages {
        // stage('Clone') {
        //     steps {
        //         git branch: 'main'
        //         url: 'https://github.com/israel206/jenkins-2.git'
        //     }
        // }
        // stage('Checkout') {
        //     steps {
        //         /* colocar os jobs do estágio de Checkout aquis */
        //     }
        // }
        // stage('Build + Unit teste') {
        //     steps {
        //         /* colocar os jobs do estágio de Build e testes unitários aqui também */
        //     }
        // }
        // stage('Archiving Reports') {
        //     steps {
        //         /* colocar os jobs do estágio de arquivamento de relatórios aqui */
        //     }
        // }
        // stage('BDD tests job'){
        //     steps {
        //         /* colocar os jobs do estágio de execução de BDD aqui CONFLITO DE ooooop´ss! */
        //     }
        // }
        stage('Finished msg') {
            steps {
                withCredentials(([string(credentialsId: 'telegramToken', variable: 'TOKEN'),
            string(credentialsId: 'telegramChatId', variable: 'CHAT_ID')])) {
                    sh 'curl -s -X POST https://api.telegram.org/bot${TOKEN}/sendMessage -d "chat_id=${CHAT_ID}"  -d text="✅ Build aceito com sucesso! 😊"'
                }
            }
        }
    }
}
