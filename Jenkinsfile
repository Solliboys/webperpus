node {

    stage('Checkout') {
        checkout scm
    }

stage('Build') {
    steps {
        sh 'composer install'
    }
}

    stage('Testing') {
        docker.image('ubuntu').inside('-u root') {
            sh '''
                echo "=== TESTING STAGE ==="
                echo "Ini adalah test"
            '''
        }
    }

    stage('Deploy') {
        sshagent(['ssh-prod']) {
            sh '''
                echo "=== DEPLOY STAGE ==="

                ssh -o StrictHostKeyChecking=no -p 22 solli@172.28.163.134 "
                    echo 'Deploy berhasil!'
                "
            '''
        }
    }
}
