node {

    stage("Init") {
        sh '''
            git config --global http.version HTTP/1.1
            git config --global http.postBuffer 524288000
        '''
    }

stage('Checkout') {
    retry(3) {
        checkout([
            $class: 'GitSCM',
            branches: [[name: '*/main']],
            userRemoteConfigs: [[url: 'https://github.com/Solliboys/webperpus.git']],
            extensions: [[$class: 'CloneOption', depth: 1, shallow: true]]
        ])
    }
}
    stage("Build") {
        docker.image('composer:2.6').inside('-u root') {
            sh '''
                rm -rf vendor
                composer clear-cache
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
