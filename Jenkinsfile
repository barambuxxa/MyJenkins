pipeline {
    agent { label 'slave' }

    environment {
        DOCKER_REGISTRY = 'gumidu'
        DOCKER_IMAGE_NAME = 'php-app-gurenich'
        DOCKER_CREDENTIALS_ID = 'docker-hub-credentials' // ID из настроек Jenkins
        IMAGE_TAG = "${env.BUILD_NUMBER}"  // Версия = номер сборки
    }

stages {
        // Этап 1: Проверка кода и окружения
        stage('Checkout & Setup') {
            steps {
                // Скачиваем код из Git
                git branch: 'main',
                url: 'https://github.com/ВАШ_USERNAME/ВАШ_REPO.git'  // ЗАМЕНИТЕ на ваш репозиторий

                // Проверяем окружение
                sh '''
                    echo "=== Проверка окружения ==="
                    echo "Build Number: ${BUILD_NUMBER}"
                    docker --version
                    kubectl version --client
                    helm version
                    kubectl get nodes
                    echo "=== Проверка завершена ==="
                '''
            }
        }
	}
}
