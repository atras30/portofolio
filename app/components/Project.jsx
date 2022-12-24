import Image from "next/image";

export default function Project({ project }) {
  const image = project.image_path;
  const url = project.url;
  
  return (
    <div className="col-4 p-2">
      <div className="card shadow-sm">
        <div className="position-relative" style={{ height: "200px", background: "#ddd" }}>
          <img className="w-100 h-100" src={image} style={{ objectFit: "contain"}} alt="..." />
        </div>
        <div className="card-body">
          <h5 className="card-title">{project.title}</h5>
          <p className="card-text">{project.description}</p>
          <a href={url} className="btn btn-primary w-100">
            Go to website
          </a>
        </div>
      </div>
    </div>
  );
}
