#!usr/bin/env groovy
pipeline {
    agent any

    stages {
        stage('Clone') {
            steps {
                git branch: '/main'
                url: 'https://github.com/israel206/jenkins-2.git'
            }
        }
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

        // stage('Unit Tests') {
        //     steps {
        //         sh 'vendor/bin/phpunit'
        //         xunit([
        //             thresholds: [
        //                 failed ( failureThreshold: "0" ),
        //                 skipped ( unstableThreshold: "0" )
        //             ],
        //             tools: [
        //                 PHPUnit(pattern: 'build/logs/junit.xml', stopProcessingIfError: true, failIfNotNew: true)
        //             ]
        //         ])
        //         publishHTML([
        //             allowMissing: false,
        //             alwaysLinkToLastBuild: false,
        //             keepAll: false,
        //             reportDir: 'build/coverage',
        //             reportFiles: 'index.html',
        //             reportName: 'Coverage Report (HTML)',
        //             reportTitles: ''
        //         ])
        //         publishCoverage adapters: [coberturaAdapter('build/logs/cobertura.xml')]
        //     }
        // }

        // stage('BDD tests job'){
        //     steps {
        //         withCredentials(([string(credentialsId: 'telegramToken', variable: 'TOKEN'),
        //         string(credentialsId: 'telegramChatId', variable: 'CHAT_ID')])) {
        //             sh 'curl -s -X POST https://api.telegram.org/bot${TOKEN}/sendMessage -d "chat_id=${CHAT_ID}"  -d text=" ❌ Falha ao construir(build) 😱"'
        //             sh 'exit 1'
        //     }
        // }
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
