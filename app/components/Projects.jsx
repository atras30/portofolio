import axios from "axios";
import React, { useEffect, useState } from "react";
import Project from "./Project";

export default function Projects() {
  const [projects, setProjects] = useState([]);

  useEffect(() => {
    async function fetchProjects() {
      const result = await axios.get("http://localhost:8000/api/projects");
      setProjects(result.data.projects);
    }

    fetchProjects();
  }, []);

  return (
    <>
      <div className="container d-flex justify-content-start align-items-stretch flex-wrap">
        {projects?.map((project) => {
          return <Project project={project} key={project.title} />;
        })}
      </div>
    </>
  );
}
