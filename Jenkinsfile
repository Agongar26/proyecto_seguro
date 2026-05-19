pipeline {
	agent any
	environment {
		//Se extrae el secret key de Jenkins y se asigna a la variable global
		ROOT_PASSWORD = credentials('mariadb-password-secret')
	}
	stages {
		stage('Limpieza') {
			steps {
				//Detiene y limpia contenedores huérfanos antes de construir
				sh 'docker compose down --remove-orphans'
			}
		}
		stage('Despliegue seguro') {
			steps {
				//Construye la imagen del Dockerfile y levanta en segundo plano
				sh 'docker compose up --build -d'
			}
		}
	}
}
