# PFO Nº2

Practica Formativa Obligatoria Nº2 DevOps  
---
Enzo Dellape

---

## Pasos para ejecutar el Proyecto

### 1. Descargar la imagen desde Docker Hub

```bash
docker pull enzodellape/miwebapp:latest
```
### 2. Ejecutar el contnedor:
```bash
docker run -d -p 8081:80 --name webserver enzodellape/miwebapp:latest
```
### Algunas Considerasiones:
<ul>
  <li>Asegurese de que el puerto 8081 esté libre en su máquina.</li>
  <li>La base de datos MySQL está incluida y configurada dentro del contenedor.</li>
</ul>
# Imagen disponible en: 
```bash
https://hub.docker.com/repository/docker/enzodellape/miwebapp
