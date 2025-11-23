pipeline {
    agent { label 'slave' }
    
    stages {
        stage('Test Environment') {
            steps {
                sh '''
                    echo "Тестируем окружение..."
                    docker --version
                    kubectl get nodes
                    helm version
                    ls -la
                '''
            }
        }
    }
}