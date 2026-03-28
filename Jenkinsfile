node {

    stage("Checkout") {
        checkout scm
    }

    stage("Build") {
        docker.image('composer:2.6').inside('-u root') {
            sh '''
                rm -rf vendor composer.lock
                composer clear-cache

                git config --global http.postBuffer 524288000
                composer config -g process-timeout 2000

                composer install \
                    --prefer-dist \
                    --no-interaction \
                    --no-progress \
                    --optimize-autoloader
            '''
        }
    }

    stage("Testing") {
        docker.image('ubuntu').inside('-u root') {
            sh 'echo "Ini adalah test"'
        }
    }

    stage("Deploy") {
        sshagent(['ssh-prod']) {
            sh '''
                ssh -o StrictHostKeyChecking=no -p 22 solli@172.28.163.134 "
                "
            '''
        }
    }
}
