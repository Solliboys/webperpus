node {

    stage('Checkout') {
        checkout scm
    }

    stage('Build') {
        sh '''
        composer install \
        --prefer-source \
        --no-interaction \
        --no-progress
        '''
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

                ssh -o StrictHostKeyChecking=no solli@172.28.163.134 "
                    echo 'Deploy berhasil!'
                "
            '''
        }
    }

}
